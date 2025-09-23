@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
  <h1 class="text-2xl font-semibold">Selamat datang, {{ $user->name }} 👋</h1>
  <p class="mt-3 text-gray-600 dark:text-gray-300">Ini adalah dashboard pengguna. Anda dapat melihat info akun dan status pesanan di sini.</p>

</div>
@endsection
