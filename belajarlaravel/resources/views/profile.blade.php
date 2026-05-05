@extends('main')

@section('container')
<main class="flex flex-col items-center justify-center min-h-[70vh] text-center px-6">
    
    <!-- Lingkaran Inisial (Avatar) -->
    <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-6 border border-gray-300">
        <span class="text-2xl font-semibold text-gray-600">GU</span>
    </div>

    <!-- Informasi Nama & Email -->
    <h1 class="text-2xl font-bold text-gray-900">Pengguna Tamu</h1>
    <p class="text-gray-500 text-sm mt-1">guest@example.com</p>

    <!-- Tombol Edit Profil -->
    <div class="mt-6">
        <a href="#" class="text-gray-400 text-xs hover:text-gray-600 transition underline underline-offset-4">
            Edit Profil
        </a>
    </div>

</main>

<!-- Footer sederhana di bawah (Opsional, jika ingin mirip foto) -->
<footer class="fixed bottom-10 w-full text-center">
    <div class="max-w-7xl mx-auto px-10 border-t border-gray-100 pt-6">
        <div class="text-blue-900 font-bold text-left text-sm tracking-tighter">WEB_CAN</div>
    </div>
</footer>
@endsection