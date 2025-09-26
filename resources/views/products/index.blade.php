@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12 ">
    <div class="text-center mb-12" style="opacity: 1; transform: none;">
        <h1 class="text-4xl font-bold text-gray-900 mb-4" data-edit-id="src/pages/Products.jsx:60:11">Produk Kami</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-edit-id="src/pages/Products.jsx:61:11">Temukan solusi digital profesional yang disesuaikan dengan kebutuhan Anda</p>
    </div>
    
   <div class="products-filter mb-8" style="opacity: 1; transform: none;">
    <div class="filter-wrapper flex flex-col lg:flex-row gap-4 items-center justify-between">
        <div class="search-container relative w-full lg:w-96">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 h-4 w-4">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </svg>
            <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-10" placeholder="Search produk..." value="">
        </div>
        
        <div class="filter-buttons flex items-center gap-2 flex-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-gray-500">
                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
            </svg>
            <button class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3" data-edit-id="src/pages/Products.jsx:88:15">All</button>
            <button class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3" data-edit-disabled="true">🌐 Website Development</button>
            <button class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3" data-edit-disabled="true">📱 Mobile Applications</button>
            <button class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3" data-edit-disabled="true">🎮 Game Development</button>
            <button class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3" data-edit-disabled="true">💻 Coding Courses</button>
            <button class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3" data-edit-disabled="true">🎯 Game Development Courses</button>
            <button class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3" data-edit-disabled="true">📊 Office Training</button>
        </div>
    </div>
</div>

    
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
                <h5 class="text-xl font-semibold text-gray-800 truncate transition">
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
                <a href="{{ route('produk.show', ['slug' => $product->slug]) }}"
                   class="flex-1 text-center py-2 rounded-lg border border-indigo-500 text-indigo-500 font-medium 
                          hover:bg-indigo-500 hover:text-white transition duration-300 shadow-sm hover:shadow-md 
                          active:scale-95">
                   Detail
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('styles')

@endpush
