@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 text-gray-800">

    {{-- Hero Section --}}
    <section class="relative bg-white">
        <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="hero-title text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
                    Belajar Game Development dengan <span class="text-blue-600">Construct 3</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Construct 3 adalah <span class="font-semibold">game engine berbasis visual programming</span> 
                    yang dirancang untuk memudahkan siapa pun membuat game 2D.  
                    Cukup gunakan sistem <span class="italic">drag-and-drop</span>, kamu bisa membangun game dari ide sederhana 
                    hingga proyek skala besar tanpa menulis ribuan baris kode.  
                    <br><br>
                    Sudah digunakan ribuan kreator di seluruh dunia — dari pelajar, indie developer, hingga profesional.
                </p>
                <a href="#mulai" class="hero-btn inline-block px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 shadow-md transition">
                     Mulai Belajar Sekarang
                </a>
            </div>
            <div class="text-center">
                <img src="{{ asset('image/banner.jpg') }}" alt="Hero Image Construct" class="w-full rounded-xl shadow-xl img-hover">
            </div>
        </div>
    </section>

    {{-- Screenshot Editor --}}
    <section class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <img src="{{ asset('image/ss.png') }}" alt="Editor Construct 3" class="w-full rounded-xl shadow-md img-hover">
        </div>
        <div>
            <h2 class="text-3xl font-bold mb-6">Editor yang Mudah & Intuitif</h2>
            <p class="text-gray-600 leading-relaxed">
                Antarmuka Construct 3 dirancang <span class="font-medium">sederhana, rapi, dan ramah pemula</span>.  
                Semua tools ditempatkan dengan jelas, sehingga kamu bisa langsung fokus ke ide kreatif tanpa kebingungan teknis.  
                <br><br>
                Tambahkan sprite, atur animasi, hingga buat logika event dengan sistem visual.  
                Setiap perubahan bisa langsung diuji di browser secara real-time — cepat, interaktif, dan menyenangkan.
            </p>
        </div>
    </section>


<section class="bg-gray-100 py-40">
    <div class="max-w-6xl mx-auto px-20 text-center">
        <h2 class="text-3xl font-bold mb-6">Contoh Game yang Bisa Kamu Buat</h2>
        <p class="text-gray-600 max-w-3xl mx-auto mb-12 leading-relaxed">
            Dari <span class="font-medium">platformer klasik</span> hingga <span class="font-medium">puzzle edukatif</span>,  
            Construct 3 membuka peluang untuk semua genre.  
            Banyak game yang sudah dirilis ke <span class="italic">Google Play Store, App Store, bahkan PC</span> menggunakan engine ini.  
            Berikut beberapa contoh inspirasi hasil karya dengan Construct 3:
        </p>

        {{-- Glide.js Container --}}
        <div class="glide game-slider">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide flex justify-center">
                        <img src="{{ asset('image/hasil.jpg') }}" alt="Contoh Game 1" class="rounded-lg shadow-lg object-contain transition duration-500 filter grayscale hover:grayscale-0 hover:scale-105">
                    </li>
                    <li class="glide__slide flex justify-center">
                        <img src="{{ asset('image/hasil2.jpg') }}" alt="Contoh Game 2" class="rounded-lg shadow-lg object-contain transition duration-500 filter grayscale hover:grayscale-0 hover:scale-105">
                    </li>
                    <li class="glide__slide flex justify-center">
                        <img src="{{ asset('image/hasil3.jpg') }}" alt="Contoh Game 3" class="rounded-lg shadow-lg object-contain transition duration-500 filter grayscale hover:grayscale-0 hover:scale-105">
                    </li>
                    {{-- Tambahkan slide lainnya jika perlu --}}
                </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--prev" data-glide-dir="<">Prev</button>
                <button class="glide__arrow glide__arrow--next" data-glide-dir=">">Next</button>
            </div>
        </div>
    </div>
</section>



    {{-- CTA Section --}}
    <section id="mulai" class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-3xl font-bold mb-6">Belajar Bersama & Jadi Game Developer</h2>
            <p class="text-gray-600 mb-8 leading-relaxed">
                Kursus ini disusun <span class="font-medium">step-by-step</span> mulai dari dasar hingga mahir.  
                Kamu akan belajar konsep logika pemrograman, desain level, hingga strategi merilis game ke platform publik.  
                <br><br>
                Lebih dari itu, kamu juga akan memahami cara membuat alur cerita, menyeimbangkan gameplay, dan mengelola project secara profesional.  
                Dengan praktik langsung, kamu tidak hanya paham teori, tapi juga siap masuk ke dunia nyata industri game.  
            </p>
            <a href="#" class="cta-btn inline-block px-8 py-4 bg-green-600 text-white rounded-lg hover:bg-green-700 shadow-md transition">
                 Daftar Sekarang
            </a>
        </div>
        <div class="text-center">
            <img src="{{ asset('image/code.jpg') }}" alt="Learning Illustration" class="w-full rounded-xl shadow-lg img-hover">
        </div>
    </section>

</div>
@endsection
