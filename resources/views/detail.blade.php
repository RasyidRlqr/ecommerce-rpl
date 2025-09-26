@extends('layouts.app')

@section('content')
<div class="p-6 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

    {{-- Gambar Produk --}}
    <div class="flex justify-center items-center">
        @if($product->image_url)
            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                 class="rounded-lg object-cover w-full h-80">
        @else
            <img src="https://via.placeholder.com/600x400?text=No+Image" alt="No image" 
                 class="rounded-lg object-cover w-full h-80">
        @endif
    </div>

    {{-- Detail Produk --}}
    <div>
        {{-- Nama Produk --}}
        <h1 class="text-3xl font-bold text-gray-800">{{ $product->name }}</h1>

        {{-- Rating --}}
        <div class="flex items-center mt-2 text-yellow-400">
            <span class="text-lg">★ ★ ★ ★ ☆</span>
            <span class="ml-2 text-gray-600 text-sm">(78 reviews)</span>
        </div>

        {{-- Harga --}}
        <p class="text-3xl font-extrabold text-blue-600 mt-4">
            Rp {{ number_format($product->price, 0, ',', '.') }}
        </p>

        {{-- Deskripsi --}}
        <div class="mt-6">
            <h2 class="font-semibold text-gray-800 mb-2">Deskripsi</h2>
            <p class="text-gray-600 leading-relaxed">
                {{ $product->description }}
            </p>
        </div>

        {{-- Fitur --}}
        <div class="mt-6">
            <h2 class="font-semibold text-gray-800 mb-2">Benefit</h2>
            <ul class="grid grid-cols-2 gap-2 text-gray-700">
                <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Unreal Engine 5</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✔</span> AAA Quality</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Blueprint & C++</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Portfolio Projects</li>
            </ul>
        </div>

        {{-- Tombol Aksi --}}
        <div class="mt-8 flex gap-4">
           <button class="flex-1 py-3 rounded-lg bg-purple-600 text-white font-semibold hover:bg-purple-700 transition">
                Buy Now
            </button>
        </div>
    </div>

</div>
@endsection
