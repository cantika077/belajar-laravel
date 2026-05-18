@extends('main')

@section('container')
<div class="relative overflow-hidden bg-slate-900 min-h-[calc(100vh-80px)] text-white flex justify-center items-center py-8">

    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),linear-gradient(to_bottom,#1e293b_1px,
    transparent_1px)] bg-[size:3rem_3rem] opacity-20"></div>
    <div class="absolute top-1/4 left-1/4 w-[300px] h-[300px] bg-indigo-500/10 rounded-full filter blur-[90px] -z-10 animate-pulse"></div>

    <div class="w-full max-w-2xl mx-auto px-6 relative z-10">

        <div class="flex flex-row items-center justify-between gap-4 mb-6 pb-4 border-b border-slate-800/60">
            <div>
                <h1 class="text-3xl font-black tracking-tight uppercase">
                    Edit <span class="bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent">Artikel</span>
                </h1>
                <p class="text-slate-400 text-xs mt-1">Perbarui artikel kamu di sini.</p>
            </div>
            <a href="/artikel" class="text-xs font-bold text-slate-400 hover:text-white transition-colors flex items-center 
            gap-1 bg-slate-800/80 border border-slate-700/60 px-3 py-1.5 rounded-xl hover:bg-slate-700/80">
                ← Kembali
            </a>
        </div>

        <form action="/artikel/{{ $artikel->id }}" method="POST" enctype="multipart/form-data" class="bg-slate-800/40 backdrop-blur-md border border-slate-700/60 p-6 
        rounded-2xl space-y-5 shadow-xl">
            @csrf
            @method('PUT')

            {{-- Error Validasi Backend --}}
            @if ($errors->any())
                <div class="bg-red-500/10 border border-red-500/30 rounded-xl px-4 py-3">
                    <ul class="text-red-400 text-xs space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>⚠ {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Judul --}}
            <div class="space-y-1.5">
                <label for="judul" class="text-xs font-bold uppercase tracking-wider text-slate-300">Judul Artikel</label>
                <input 
                    type="text" 
                    name="judul" 
                    id="judul"
                    value="{{ old('judul', $artikel->judul) }}"
                    minlength="5"
                    maxlength="255"
                    required
                    class="w-full bg-slate-900/80 border border-slate-700/80 rounded-xl px-4 py-2.5 text-sm text-white 
                    placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all"
                >
            </div>

            {{-- Gambar Sekarang --}}
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-300">Gambar Sekarang</label>
                <img src="{{ asset('uploads/' . $artikel->gambar) }}" alt="Gambar Artikel" 
                    class="w-40 h-28 object-cover rounded-xl border border-slate-700">
            </div>

            {{-- Upload Gambar Baru --}}
            <div class="space-y-1.5">
                <label for="gambar" class="text-xs font-bold uppercase tracking-wider text-slate-300">Ganti Gambar (Opsional)</label>
                <input 
                    type="file" 
                    name="gambar" 
                    id="gambar"
                    accept="image/jpg,image/jpeg,image/png,image/webp"
                    class="w-full bg-slate-900/80 border border-slate-700/80 rounded-xl px-4 py-2.5 text-sm text-slate-300
                    file:mr-4 file:py-1.5 file:px-4 file:rounded-lg file:border-0 file:bg-blue-600 file:text-white 
                    file:text-xs file:font-bold file:cursor-pointer hover:file:bg-blue-700 transition-all"
                >
                <p class="text-slate-500 text-xs">Kosongkan jika tidak ingin mengganti gambar. Format: JPG, PNG, WEBP. Maks: 2MB</p>
            </div>

            {{-- Isi Artikel --}}
            <div class="space-y-1.5">
                <label for="isi" class="text-xs font-bold uppercase tracking-wider text-slate-300">Isi Artikel</label>
                <textarea 
                    name="isi" 
                    id="isi" 
                    rows="4"
                    minlength="10"
                    required
                    class="w-full bg-slate-900/80 border border-slate-700/80 rounded-xl px-4 py-3 text-sm text-white 
                    placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all 
                    resize-none leading-relaxed"
                >{{ old('isi', $artikel->isi) }}</textarea>
            </div>

            <div class="pt-2">
                <button 
                    type="submit" 
                    class="w-full flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 
                    hover:from-blue-700 hover:to-indigo-700 text-white text-xs font-bold uppercase tracking-wider rounded-xl 
                    shadow-lg shadow-blue-500/20 transition-all active:scale-[0.99]"
                >
                    💾 Simpan Perubahan
                </button>
            </div>

        </form>

    </div>
</div>
@endsection