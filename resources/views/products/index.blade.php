@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold mb-10 text-gray-800 text-center relative inline-block">
        Katalog Produk
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach($products as $product)
        <div class="group bg-white rounded-2xl shadow-md overflow-hidden transform transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl relative animate-fadeInUp">
            
            <!-- Gambar Produk -->
            <div class="relative h-56 bg-gray-100 overflow-hidden">
                @if($product->image_url)
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                         class="object-cover h-full w-full group-hover:scale-110 transition duration-700 ease-out">
                @else
                    <img src="https://via.placeholder.com/300x200?text=No+Image" alt="No image" 
                         class="object-cover h-full w-full group-hover:scale-110 transition duration-700 ease-out">
                @endif
                
                <!-- Efek Shine -->
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent 
                            -translate-x-full group-hover:translate-x-full transition duration-700 ease-in-out"></div>
                
            </div>

            <!-- Info Produk -->
            <div class="p-6">
                <h5 class="text-xl font-semibold text-gray-800 truncate group-hover:text-indigo-600 transition">
                    {{ $product->name }}
                </h5>
                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                    {{ Str::limit($product->description, 90) }}
                </p>
                <p class="text-2xl font-bold text-indigo-600 mt-5">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </p>
            </div>

            <!-- Tombol -->
            <div class="px-6 pb-6 flex gap-3">
                <a href="#"
                   class="flex-1 text-center py-2 rounded-lg border border-indigo-500 text-indigo-500 font-medium 
                          hover:bg-indigo-500 hover:text-white transition duration-300 shadow-sm hover:shadow-md 
                          active:scale-95">
                   Detail
                </a>
                <a href="#"
                   class="flex-1 text-center py-2 rounded-lg bg-gradient-to-r from-green-500 to-green-600 text-white font-medium
                          hover:from-green-600 hover:to-green-700 transition duration-300 shadow-sm hover:shadow-md 
                          active:scale-95">
                   Pesan
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('styles')
<style>
/* Animasi masuk card */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.animate-fadeInUp {
  animation: fadeInUp 0.6s ease forwards;
}
</style>
@endpush
