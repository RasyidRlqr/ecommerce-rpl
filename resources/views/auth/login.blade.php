@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900">
    <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8">
      <div class="flex flex-col space-y-1.5 p-6 text-center">
        <h1 class="tracking-tight text-3xl font-bold gradient-text" data-edit-disabled="true">Selamat Datang</h1>
        <hp class="text-gray-600 mt-2">Login untuk masuk ke dashboard Anda</p>
          </div>
        @if($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Email</label>
                <input type="email" name="email" required value="{{ old('email') }}"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-200 transition duration-150">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-200 transition duration-150">
            </div>

            <div class="flex items-center justify-between">
                <label class="inline-flex items-center text-sm text-gray-600 dark:text-gray-300">
                    <input type="checkbox" name="remember" class="mr-2 w-4 h-4 rounded border-gray-300 dark:border-gray-500 focus:ring-indigo-500">
                    Remember me
                </label>
            </div>

            <button type="submit"
                class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-150">
                Login
            </button>
        </form>


    </div>
</div>
@endsection
