@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
        <div class="text-center">
            <h1 class="text-3xl font-bold">Selamat Datang</h1>
            <p class="text-gray-600 mt-2">Login untuk masuk ke dashboard Anda</p>
        </div>
        
        <div id="error-message" class="mt-4 mb-4 p-3 bg-red-100 text-red-700 rounded" style="display: none;"></div>

        <form id="login-form" class="space-y-5 mt-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" required class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" required class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <button type="submit" id="login-button" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700">
                Login
            </button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const loginForm = document.getElementById('login-form');
    const loginButton = document.getElementById('login-button');
    const errorMessageDiv = document.getElementById('error-message');

    loginForm.addEventListener('submit', async function(event) {
        event.preventDefault();
        loginButton.textContent = 'Logging in...';
        loginButton.disabled = true;
        errorMessageDiv.style.display = 'none';

        try {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // 1. Panggil API Login untuk dapat token
            const apiResponse = await fetch('/api/login', {
                method: 'POST',
                headers: {'Content-Type': 'application/json', 'Accept': 'application/json'},
                body: JSON.stringify({ email, password })
            });
            const apiResult = await apiResponse.json();
            if (!apiResponse.ok) throw new Error(apiResult.message);
            
            const token = apiResult.access_token;

            // 2. Panggil Rute Jembatan untuk membuat sesi
            const bridgeResponse = await fetch('{{ route("login.bridge") }}', {
                method: 'POST',
                headers: {'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                body: JSON.stringify({ token: token })
            });
            const bridgeResult = await bridgeResponse.json();
            if (!bridgeResponse.ok) throw new Error(bridgeResult.message);
            
            // 3. Redirect ke dashboard
            window.location.href = bridgeResult.redirect_url;

        } catch (error) {
            errorMessageDiv.textContent = error.message;
            errorMessageDiv.style.display = 'block';
            loginButton.textContent = 'Login';
            loginButton.disabled = false;
        }
    });
</script>
@endpush