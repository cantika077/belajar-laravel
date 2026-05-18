@extends('main')

@section('container')
<div class="relative overflow-hidden bg-slate-900 min-h-[calc(100vh-80px)] text-white">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),
    linear-gradient(to_bottom,#1e293b_1px,transparent_1px)] bg-[size:3rem_3rem] opacity-20"></div>

    <main class="max-w-7xl mx-auto px-6 py-6 relative z-10 w-full">
        
        <div class="flex flex-row items-center justify-between gap-4 mb-6 pb-4 border-b border-slate-800">
            <div>
                <h1 class="text-2xl font-black tracking-tight uppercase">
                    Kumpulan <span class="bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text 
                    text-transparent">Artikel</span>
                </h1>
            </div>
            <a href="/artikel/create" class="px-4 py-2 bg-gradient-to-r from-blue-600 to-indigo-600 
            text-white text-xs font-bold rounded-xl shadow-lg shadow-blue-500/20 transition-all">
                + Create Article
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($semuaArtikel as $item)
            <div class="group bg-slate-800/40 backdrop-blur-md border border-slate-700/50 
            rounded-2xl overflow-hidden transition-all duration-300 hover:border-blue-500/50">
                
                <div class="relative h-40 w-full overflow-hidden">
                    @php
                        $gambarFinal = $item->gambar;

                        // Cek apakah gambar adalah file upload atau URL
                        if ($gambarFinal && !str_starts_with($gambarFinal, 'http')) {
                            // File upload — ambil dari folder uploads
                            $gambarFinal = asset('uploads/' . $gambarFinal);
                        } elseif (!$gambarFinal || str_contains($gambarFinal, 'pin.it')) {
                            // Kosong atau link tidak valid — pakai gambar default
                            $gambarFinal = 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=800&q=80';
                        }
                    @endphp

                    <img 
                        src="{{ $gambarFinal }}" 
                        alt="{{ $item->judul }}" 
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/95 via-slate-900/40 
                    to-transparent"></div>
                    <span class="absolute bottom-2 left-3 px-2 py-0.5 bg-blue-500/80 text-[9px] 
                    font-bold uppercase rounded">IDE KREATIF</span>
                </div>

                <div class="p-3.5 flex flex-col justify-between h-28">
                    <div class="space-y-1.5">
                        <h3 class="text-sm font-bold text-white line-clamp-1 group-hover:text-blue-400 
                        transition-colors">
                            {{ $item->judul }}
                        </h3>
                        <p class="text-slate-400 text-[10px] line-clamp-2 leading-relaxed">
                            {{ Str::limit(strip_tags($item->isi ?? 'Lihat rincian lengkap.'), 80) }}
                        </p>
                    </div>
                    
                    <div class="pt-3 flex items-center justify-between border-t border-slate-700/30">
                        <a href="/artikel/{{ $item->id }}" class="text-blue-400 text-[10px] font-bold flex 
                            items-center gap-1">DETAIL →</a>
                        <div class="flex items-center gap-1.5">
                            <a href="/artikel/{{ $item->id }}/edit" class="px-2 py-0.5 bg-slate-700/50 
                                hover:bg-amber-500/20 hover:text-amber-400 rounded text-[9px] 
                                transition-all">EDIT</a>
                            
                            <form action="/artikel/{{ $item->id }}" method="POST" class="inline form-delete">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn-delete px-2 py-0.5 bg-slate-700/50 
                                hover:bg-red-500/20 hover:text-red-400 rounded text-[9px] 
                                transition-all">DEL</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.btn-delete');
        
        deleteButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                const form = this.closest('.form-delete');
                
                Swal.fire({
                    title: 'Hapus Artikel?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ef4444', 
                    cancelButtonColor: '#475569',  
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal',
                    background: '#1e293b',         
                    color: '#ffffff',              
                    customClass: {
                        popup: 'border border-slate-700 rounded-2xl'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
@endsection