@extends('main')

@section('container')
<div class="relative overflow-hidden bg-slate-900 min-h-[calc(100vh-80px)] text-white py-8">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),
    linear-gradient(to_bottom,#1e293b_1px,transparent_1px)] bg-[size:3rem_3rem] opacity-20"></div>

    <div class="max-w-5xl mx-auto px-6 relative z-10">
        
        <div class="mb-4">
            <a href="/artikel" class="text-xs font-bold text-slate-400 hover:text-white transition-colors 
            bg-slate-800/80 border border-slate-700/60 px-4 py-2 rounded-xl shadow-md inline-block">
                ← Kembali ke Artikel
            </a>
        </div>

        <article class="bg-slate-800/40 backdrop-blur-md border border-slate-700/60 rounded-2xl 
        overflow-hidden shadow-2xl p-6 grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
            
            <div class="md:col-span-5 w-full h-48 md:h-80 rounded-xl overflow-hidden border 
            border-slate-700/40 shadow-lg">
                @php
                    $gambarFinal = $artikel->gambar;
                    if ($gambarFinal && !str_starts_with($gambarFinal, 'http')) {
                        $gambarFinal = asset('uploads/' . $gambarFinal);
                    } elseif (!$gambarFinal) {
                        $gambarFinal = 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=800&q=80';
                    }
                @endphp
                <img 
                    src="{{ $gambarFinal }}" 
                    alt="{{ $artikel->judul }}" 
                    class="w-full h-full object-cover"
                >
            </div>

            <div class="md:col-span-7 space-y-4">
                <div>
                    <span class="px-2 py-0.5 bg-blue-500/80 text-white font-bold text-[9px] uppercase 
                    rounded inline-block mb-2">IDE KREATIF</span>
                    <h1 class="text-xl md:text-2xl font-black tracking-tight leading-tight bg-gradient-to-r 
                    from-white via-slate-100 to-slate-400 bg-clip-text text-transparent">
                        {{ $artikel->judul }}
                    </h1>
                    <p class="text-slate-400 text-[11px] mt-1">
                        Dipublikasikan pada {{ $artikel->created_at->format('d M Y') }}
                    </p>
                </div>

                <div class="text-slate-300 text-xs md:text-sm leading-relaxed whitespace-pre-line 
                font-light tracking-wide border-t border-slate-700/30 pt-3 max-h-[300px] 
                overflow-y-auto pr-2 custom-scrollbar">
                    {{ $artikel->isi }}
                </div>
            </div>

        </article>

    </div>
</div>

<style>
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: rgba(30, 41, 59, 0.5);
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #3b82f6;
        border-radius: 10px;
    }
</style>
@endsection