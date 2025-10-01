@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white text-gray-800">

    {{-- Hero Section --}}
    <section class="relative bg-white">
        <section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
            <section>
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
            </section>
            <img src="{{ asset('image/banner.jpg') }}" alt="Hero Image Construct" class="w-full rounded-xl shadow-xl img-hover">
        </section>
    </section>

    {{-- Screenshot Editor --}}
    <section class="relative bg-white">
        <section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
            <img src="{{ asset('image/ss.png') }}" alt="Editor Construct 3" class="w-full rounded-xl shadow-md img-hover">
            <section>
                <h2 class="text-3xl font-bold mb-6">Editor yang Mudah & Intuitif</h2>
                <p class="text-gray-600 leading-relaxed">
                    Antarmuka Construct 3 dirancang <span class="font-medium">sederhana, rapi, dan ramah pemula</span>.
                    Semua tools ditempatkan dengan jelas, sehingga kamu bisa langsung fokus ke ide kreatif tanpa kebingungan teknis.
                    <br><br>
                    Tambahkan sprite, atur animasi, hingga buat logika event dengan sistem visual.
                    Setiap perubahan bisa langsung diuji di browser secara real-time — cepat, interaktif, dan menyenangkan.
                </p>
            </section>
        </section>
    </section>

    {{-- Fitur Utama --}}
    <section class="bg-white py-20">
        <section class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-10">Fitur Utama Construct 3</h2>
            <section class="grid md:grid-cols-3 gap-8">
                <section class="p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-3">Drag & Drop</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Bangun logika game dengan sistem visual tanpa ribuan baris kode.
                    </p>
                </section>
                <section class="p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-3">Multi Platform</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Ekspor game ke Web, Android, iOS, hingga PC hanya dengan beberapa klik.
                    </p>
                </section>
                <section class="p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-3">Realtime Preview</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Uji langsung di browser dengan sekali klik, cepat dan efisien.
                    </p>
                </section>
            </section>
        </section>
    </section>

    {{-- Kenapa Memilih --}}
    <section class="bg-white py-20">
        <section class="mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <img src="{{ asset('image/cons.avif') }}" alt="Kenapa Memilih Construct 3" class="rounded-xl shadow-md img-hover">
            <section>
                <h2 class="text-3xl font-bold mb-6">Kenapa Memilih Construct 3?</h2>
                <ul class="space-y-4 text-gray-600">
                    <li>✔ Ramah pemula tapi tetap powerful untuk developer berpengalaman.</li>
                    <li>✔ Komunitas besar dengan ribuan template & tutorial siap pakai.</li>
                    <li>✔ Tidak perlu install software rumit — cukup buka di browser.</li>
                </ul>
            </section>
        </section>
    </section>

    {{-- Contoh Game --}}
    <section class="relative bg-white">
        <section class="max-w-7xl mx-auto px-6 md:px-20 text-center">
            <h2 class="text-3xl font-bold mb-6">Contoh Game yang Bisa Kamu Buat</h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-12 leading-relaxed">
                Dari <span class="font-medium">platformer klasik</span> hingga <span class="font-medium">puzzle edukatif</span>,
                Construct 3 membuka peluang untuk semua genre.
                Banyak game yang sudah dirilis ke <span class="italic">Google Play Store, App Store, bahkan PC</span> menggunakan engine ini.
                Berikut beberapa contoh inspirasi hasil karya dengan Construct 3:
            </p>

            @php
                $games = [
                    ['img' => 'hasil.jpg',  'alt' => 'Contoh Game 1', 'link' => 'https://www.construct.net/en/free-online-games/key-shield-184/play?via=mh'],
                    ['img' => 'hasil2.jpg', 'alt' => 'Contoh Game 2', 'link' => 'https://www.construct.net/en/free-online-games/revenge-dog-2378/play?via=mh'],
                    ['img' => 'hasil3.jpg', 'alt' => 'Contoh Game 3', 'link' => 'https://www.construct.net/en/free-online-games/the-legend-of-zelda-maker-21903/play?via=mh'],
                    ['img' => 'hasil4.png', 'alt' => 'Contoh Game 4', 'link' => 'https://www.construct.net/en/free-online-games/comic-manga-chaos-crossover-4334/play?via=mh'],
                    ['img' => 'hasil5.jpg', 'alt' => 'Contoh Game 5', 'link' => 'https://www.construct.net/en/free-online-games/tiny-crash-fighters-46782/play?via=mh'],
                    ['img' => 'hasil6.png', 'alt' => 'Contoh Game 6', 'link' => 'https://www.construct.net/en/free-online-games/medusa-wrath-queen-178/play?via=mh'],
                    ['img' => 'hasil7.png', 'alt' => 'Contoh Game 7', 'link' => 'https://www.construct.net/en/free-online-games/pizza-challenge-game-2989/play?via=mh'],
                    ['img' => 'hasil8.png', 'alt' => 'Contoh Game 8', 'link' => 'https://www.construct.net/en/free-online-games/poyo-adventures-29250/play?via=mh'],
                    ['img' => 'hasil9.jpg', 'alt' => 'Contoh Game 9', 'link' => 'https://www.construct.net/en/free-online-games/shark-io-10609/play?via=mh'],
                    ['img' => 'hasil10.png', 'alt' => 'Contoh Game 10', 'link' => 'https://www.construct.net/en/free-online-games/fnf-whitty-week-one-lo-fight-24941/play?via=mh'],
                ];
            @endphp

            <section class="overflow-hidden relative">
                <section id="game-marquee" class="flex gap-6">
                    @foreach ($games as $game)
                        <section class="flex-shrink-0 w-64 relative group">
                            <img src="{{ asset('image/' . $game['img']) }}"
                                alt="{{ $game['alt'] }}"
                                class="rounded-lg shadow-lg object-cover w-full h-48 transition duration-500 filter grayscale group-hover:grayscale-0 group-hover:scale-105">
                            <a href="{{ $game['link'] }}" target="_blank"
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
                                <span class="bg-indigo-600 text-white px-6 py-2 rounded-full shadow-lg text-lg font-medium">
                                    Coba Mainkan
                                </span>
                            </a>
                        </section>
                    @endforeach
                </section>
            </section>
        </section>
    </section>

{{-- FAQ --}}
<section class="bg-white py-20">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-10 text-center">Orang lain juga bertanya</h2>
        <div class="space-y-6" x-data="{ active: null }">

            <!-- FAQ Item -->
            <template x-for="(item, index) in [
                {q:'Apakah Construct 3 gratis?', a:'Construct 3 menyediakan versi gratis dengan fitur terbatas. Untuk fitur penuh, tersedia opsi berlangganan.'},
                {q:'Apakah perlu install software?', a:'Tidak, Construct 3 berjalan langsung di browser modern tanpa instalasi tambahan.'},
                {q:'Bisakah membuat game mobile?', a:'Ya, Construct 3 mendukung ekspor ke Android dan iOS.'},
                {q:'Apakah bisa digunakan offline?', a:'Ya, Construct 3 memiliki mode offline yang bisa digunakan setelah pertama kali dibuka.'},
                {q:'Apakah cocok untuk pemula?', a:'Sangat cocok. Banyak pemula belajar dari Construct 3 karena tampilannya intuitif dan tidak membutuhkan coding rumit.'},
                {q:'Apa bedanya dengan Unity/Unreal?', a:'Unity/Unreal lebih fokus ke 3D dengan kebutuhan coding. Construct 3 fokus pada 2D dengan sistem drag-and-drop yang lebih sederhana.'},
                {q:'Apakah game yang dibuat bisa menghasilkan uang?', a:'Ya. Game buatan Construct 3 bisa dipublikasikan ke Play Store, App Store, atau platform web dan bisa dimonetisasi.'}
            ]" :key="index">
                <div class="p-6 bg-white rounded-lg shadow-md cursor-pointer"
                     @mouseenter="if(window.innerWidth > 768) active = index"
                     @mouseleave="if(window.innerWidth > 768) active = null"
                     @click="active === index ? active = null : active = index">
                    <h3 class="font-semibold" x-text="item.q"></h3>
                    <p x-show="active === index" x-transition 
                       class="mt-2 text-gray-600 leading-relaxed"
                       x-text="item.a">
                    </p>
                </div>
            </template>

        </div>
    </div>
</section>

    {{-- CTA Section --}}
    <section id="mulai" class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
        <section class="flex flex-col justify-center">
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
        </section>
        <img src="{{ asset('image/code.jpg') }}" alt="Learning Illustration" class="w-full max-h-96 object-cover rounded-xl shadow-lg img-hover">
    </section>

</div>
@endsection
