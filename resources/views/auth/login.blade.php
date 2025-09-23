@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-xl shadow p-6">
    <h2 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-100 text-center">Login</h2>

    @if($errors->any())
      <div class="mb-4 text-red-600">
        {{ $errors->first() }}
      </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="block text-sm text-gray-700 dark:text-gray-200">Email</label>
        <input type="email" name="email" required value="{{ old('email') }}"
               class="w-full px-3 py-2 rounded border dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
      </div>

      <div class="mb-3">
        <label class="block text-sm text-gray-700 dark:text-gray-200">Password</label>
        <input type="password" name="password" required
               class="w-full px-3 py-2 rounded border dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
      </div>

      <div class="flex items-center justify-between gap-3">
        <label class="inline-flex items-center">
          <input type="checkbox" name="remember" class="mr-2"> Remember
        </label>
        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded">Login</button>
      </div>
    </form>
  </div>
</div>
@endsection
