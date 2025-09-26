@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white p-6 space-y-12">

    <!-- Welcome Section -->
    <div class="text-center max-w-3xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold text-black mb-4">
            Selamat Datang, {{ Auth::user()->name }}!
        </h1>
        <p class="text-lg text-gray-700 mb-6">
            Temukan game, aplikasi, dan kursus coding seru yang bisa kamu mainkan atau pelajari langsung dari dashboard ini!
        </p>
    </div>

    <!-- Quick Options / User Actions -->
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="{{ route('products.index', ['category' => 'game']) }}" class="bg-blue-50 hover:bg-blue-100 rounded-lg p-6 flex flex-col items-center text-center transition">
            <img src="{{ asset('icons/game-icon.svg') }}" alt="Game" class="w-16 h-16 mb-4">
            <h3 class="text-xl font-semibold mb-2">Main Game</h3>
            <p class="text-gray-600 mb-2">Asah logika dan skill coding melalui game interaktif!</p>
            <span class="text-blue-600 font-medium">Lihat Game →</span>
        </a>

        <a href="{{ route('products.index', ['category' => 'kursus']) }}" class="bg-green-50 hover:bg-green-100 rounded-lg p-6 flex flex-col items-center text-center transition">
            <img src="{{ asset('icons/learning-icon.svg') }}" alt="Kursus" class="w-16 h-16 mb-4">
            <h3 class="text-xl font-semibold mb-2">Belajar Coding</h3>
            <p class="text-gray-600 mb-2">Kursus interaktif untuk meningkatkan skill coding-mu!</p>
            <span class="text-green-600 font-medium">Mulai Belajar →</span>
        </a>

        <a href="{{ route('products.index', ['category' => 'aplikasi']) }}" class="bg-yellow-50 hover:bg-yellow-100 rounded-lg p-6 flex flex-col items-center text-center transition">
            <img src="{{ asset('icons/app-icon.svg') }}" alt="Aplikasi" class="w-16 h-16 mb-4">
            <h3 class="text-xl font-semibold mb-2">Buat Aplikasi</h3>
            <p class="text-gray-600 mb-2">Mulai proyek aplikasi-mu langsung dari dashboard!</p>
            <span class="text-yellow-600 font-medium">Lihat Aplikasi →</span>
        </a>
    </div>

    <!-- Game Section -->
    <div class="max-w-5xl mx-auto space-y-8">
        <!-- Game 1 -->
        <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center md:space-x-6">
            <iframe src="https://play-lh.googleusercontent.com/7MOTF2uLOWqAh1feSKBixLtdvpwUn9AjGCx_Tx8bSaoYTCnvpJHqRHQur3jCUXDNt_0BbFV9RDLdJqQ2JzdYW4I=w526-h296-rw" 
                    class="w-full md:w-96 h-64 rounded-lg mb-4 md:mb-0" 
                    frameborder="0" allowfullscreen>
            </iframe>
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-black mb-2">Game Edukasi Matematika</h2>
                <p class="text-gray-700 mb-4">
                    Game ini membantu kamu belajar matematika dengan cara yang menyenangkan dan interaktif.
                </p>
                <a href="https://www.construct.net/en/free-online-games/game-edukasi-matematika-15216/play" 
                   class="inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                   Mainkan Game
                </a>
            </div>
        </div>

        <!-- Game 2 -->
        <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center md:space-x-6">
            <iframe src="https://construct-static.com/uploads/72459/418c1925-17f8-4b18-8311-c75484152bb8/c/-586451911/concurso.png" 
                    class="w-full md:w-96 h-64 rounded-lg mb-4 md:mb-0" 
                    frameborder="0" allowfullscreen>
            </iframe>
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-black mb-2">Zelda Game Demo</h2>
                <p class="text-gray-700 mb-4">
                    Demo game yang terinspirasi dari Zelda, cocok untuk kamu yang suka petualangan dan teka-teki.
                </p>
                <a href="https://www.construct.net/en/free-online-games/zelda-game-demo-28796/play" 
                   class="inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                   Mainkan Demo
                </a>
            </div>
        </div>
    </div>

    <!-- Courses / Apps Section (Contoh Card Grid) -->
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold text-black mb-6">Produk Lainnya</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Kursus -->
            <div class="bg-green-50 rounded-lg shadow-md p-6 flex flex-col">
                <h3 class="text-xl font-semibold mb-2">Belajar Python</h3>
                <p class="text-gray-700 mb-4">Kursus interaktif untuk belajar Python dari dasar sampai mahir.</p>
                <a href="{{ route('products.index', ['category' => 'kursus']) }}" 
                   class="mt-auto inline-block px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                   Mulai Belajar
                </a>
            </div>

            <!-- Aplikasi -->
            <div class="bg-yellow-50 rounded-lg shadow-md p-6 flex flex-col">
                <h3 class="text-xl font-semibold mb-2">Proyek Aplikasi</h3>
                <p class="text-gray-700 mb-4">Mulai membuat aplikasi sesuai kebutuhanmu dengan panduan step-by-step.</p>
                <a href="{{ route('products.index', ['category' => 'aplikasi']) }}" 
                   class="mt-auto inline-block px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition">
                   Lihat Aplikasi
                </a>
            </div>

            <!-- Game Mini -->
            <div class="bg-blue-50 rounded-lg shadow-md p-6 flex flex-col">
                <h3 class="text-xl font-semibold mb-2">Mini Game</h3>
                <p class="text-gray-700 mb-4">Game ringan untuk mengisi waktu luang sekaligus belajar logika pemrograman.</p>
                <a href="{{ route('products.index', ['category' => 'game']) }}" 
                   class="mt-auto inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                   Mainkan Sekarang
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
