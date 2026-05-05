@extends('main')

@section('container')
<main class="max-w-4xl mx-auto px-10 py-12">
    <h1 class="text-3xl font-bold mb-8 text-gray-800">Tambah Artikel Baru</h1>

    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
        <!-- Form ini akan mengirim data ke fungsi 'store' di controller -->
        <form action="/artikel" method="POST">
            @csrf <!-- Keamanan Laravel, wajib ada! -->

            <div class="mb-6">
                <label for="judul" class="block text-gray-700 font-bold mb-2">Judul Artikel</label>
                <input type="text" name="judul" id="judul" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    placeholder="Masukkan judul menarik..." required>
            </div>

            <div class="mb-6">
                <label for="isi" class="block text-gray-700 font-bold mb-2">Isi Artikel</label>
                <textarea name="isi" id="isi" rows="10" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    placeholder="Tuliskan isi artikelmu di sini..." required></textarea>
            </div>

            <div class="flex justify-end gap-4">
                <a href="/artikel" class="px-6 py-2 text-gray-600 hover:underline">Batal</a>
                <button type="submit" class="bg-blue-600 text-white px-8 py-2 rounded-lg font-bold hover:bg-blue-700 transition">
                    Simpan Artikel
                </button>
            </div>
        </form>
    </div>
</main>
@endsection