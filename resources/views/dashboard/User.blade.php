@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-[70vh] bg-white">
    <div class="text-center max-w-2xl">
        <h1 class="text-4xl md:text-5xl font-bold text-black mb-4">
            Selamat Datang
        </h1>
        <p class="text-lg text-black mb-6">
            Senang bertemu denganmu di <span class="font-semibold text-blue-900 head-shake">Muh1 Ecommerce.</span>  
            Platform profesional untuk <span class="text-black">Game, Aplikasi, dan Kursus Coding</span>.
        </p>
        <p class="text-sm text-black">
    Jelajahi 
    <a href="{{ route('products.index') }}" 
       class="text-black font-semibold ">
       produk
    </a> 
    dan layanan kami melalui menu di samping.  
    Kami hadir untuk mendukung perjalananmu di dunia Digital.
</p>

    </div>
</div>
@endsection
