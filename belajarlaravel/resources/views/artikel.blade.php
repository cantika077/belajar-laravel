@extends('main')

@section('container')
<main class="max-w-7xl mx-auto px-10 py-12">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Daftar Artikel</h1>
        <a href="/artikel/create" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition shadow-sm">
            + Tambah Artikel
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($semuaArtikel as $item)
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition duration-300">
            <!-- Gambar Hutan Otomatis -->
            <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=800&q=80" 
                 class="w-full h-56 object-cover" alt="Cover">
            
            <div class="p-6">
                <!-- Judul Artikel -->
                <h2 class="text-xl font-bold mb-2 text-gray-800">{{ $item->judul }}</h2>
                
                <!-- Cuplikan Isi -->
                <p class="text-gray-500 text-sm mb-6 leading-relaxed">
                    {{ Str::limit($item->isi, 100) }}
                </p>
                
                <div class="flex justify-between items-center border-t pt-4">
                    <!-- Link Baca -->
                    <a href="/artikel/{{ $item->id }}" class="text-blue-600 text-sm font-bold hover:underline">
                        Baca Selengkapnya →
                    </a>
                    
                    <!-- Area Tombol Aksi (Edit & Hapus) -->
                    <div class="flex items-center gap-3">
                        <!-- Icon Edit -->
                        <a href="/artikel/{{ $item->id }}/edit" class="text-gray-400 hover:text-blue-500 transition" title="Edit">
                            <i class="bi bi-pencil-square text-lg"></i>
                        </a>

                        <!-- Icon Hapus -->
                        <form action="/artikel/{{ $item->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-gray-400 hover:text-red-500 transition" title="Hapus">
                                <i class="bi bi-trash text-lg"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if($semuaArtikel->isEmpty())
        <div class="text-center py-20 bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200">
            <p class="text-gray-400 italic">Belum ada artikel. Ayo tulis artikel pertamamu!</p>
        </div>
    @endif
</main>
@endsection