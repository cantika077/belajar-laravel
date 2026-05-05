@extends('main')

@section('container')
<main class="flex flex-col items-center justify-center min-h-[80vh] text-center px-6">
    <h1 class="text-5xl md:text-7xl font-[800] tracking-tight text-[#111827] leading-tight max-w-4xl">
        Selamat Datang di Dunia Ide
    </h1>
    <p class="mt-6 text-lg md:text-xl text-gray-500 max-w-2xl font-light">
        Temukan artikel menarik dan bagikan pemikiran Anda tanpa batas.
    </p>
    <div class="mt-10 flex flex-col md:flex-row gap-4">
        <a href="/artikel" class="bg-[#3B82F6] text-white px-10 py-4 rounded-full font-bold text-lg shadow-lg hover:bg-blue-600 transition">
            Jelajahi Artikel
        </a>
        <a href="#" class="border-2 border-gray-200 text-gray-500 px-10 py-4 rounded-full font-bold text-lg hover:bg-gray-50 transition">
            Mulai Menulis
        </a>
    </div>
</main>
@endsection