@extends('main')

@section('container')
<div class="relative overflow-hidden bg-slate-900 min-h-[calc(100vh-80px)] text-white py-12">
    <!-- Grid Background Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),
    linear-gradient(to_bottom,#1e293b_1px,transparent_1px)] bg-[size:3rem_3rem] opacity-20"></div>

    <div class="max-w-4xl mx-auto px-6 relative z-10 w-full">
        
        <div class="bg-slate-800/40 backdrop-blur-md border border-slate-700/60 rounded-2xl overflow-hidden shadow-2xl">
            
            <!-- Banner Gradient -->
            <div class="h-32 md:h-40 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 relative"></div>

            <!-- Header Profil -->
            <div class="px-6 md:px-8 pb-6 relative flex flex-col md:flex-row items-start md:items-end justify-between 
            gap-4 -mt-12 md:-mt-16 border-b border-slate-700/50">
                <div class="flex flex-col md:flex-row items-start md:items-end gap-4">
                    <!-- Avatar / Inisial Nama -->
                    <div class="w-24 h-24 md:w-32 md:h-32 rounded-2xl bg-slate-800 border-4 border-slate-900 flex 
                    items-center justify-center text-2xl md:text-4xl font-black text-blue-400 shadow-xl tracking-wider uppercase">
                        {{ auth()->check() ? strtoupper(substr(auth()->user()->name, 0, 2)) : 'GU' }}
                    </div>
                    <!-- Nama & Email -->
                    <div class="mb-2">
                        <h1 class="text-xl md:text-2xl font-black tracking-tight uppercase">
                            {{ auth()->check() ? auth()->user()->name : 'Pengguna Tamu' }}
                        </h1>
                        <p class="text-slate-400 text-xs md:text-sm font-light">
                            {{ auth()->check() ? auth()->user()->email : 'guest@example.com' }}
                        </p>
                    </div>
                </div>

                <!-- Tombol Edit -->
                <button class="mb-2 flex items-center gap-2 text-xs font-bold text-slate-300 hover:text-white transition-colors 
                bg-slate-700/60 hover:bg-slate-700 border border-slate-600/50 px-4 py-2 rounded-xl shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" 
                    stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 
                        1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.128-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                    </svg>
                    Edit Profil
                </button>
            </div>

            <!-- Konten Utama -->
            <div class="p-6 md:p-8 grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
                
                <!-- Informasi Akun -->
                <div class="md:col-span-7 space-y-4">
                    <h3 class="text-xs font-bold tracking-wider text-blue-400 uppercase">Informasi Akun</h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-slate-900/60 border border-slate-700/40 p-4 rounded-xl">
                            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Status Peran</p>
                            <p class="text-sm font-semibold text-slate-200">
                                {{ auth()->check() ? 'User / Member' : 'Guest / Tamu' }}
                            </p>
                        </div>
                        <div class="bg-slate-900/60 border border-slate-700/40 p-4 rounded-xl">
                            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Bergabung Sejak</p>
                            <p class="text-sm font-semibold text-slate-200">
                                {{ auth()->check() ? auth()->user()->created_at->translatedFormat('F Y') : 'Mei 2026' }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Statistik / Total Kontribusi -->
                <div class="md:col-span-5 bg-gradient-to-br from-blue-500/10 to-indigo-500/10 border 
                border-blue-500/20 p-5 rounded-xl space-y-3 relative overflow-hidden">
                    <div class="absolute -right-6 -bottom-6 text-blue-500/5 transform pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" 
                        stroke="currentColor" class="w-32 h-32">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 
                            .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 
                            3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>

                    <div>
                        <h4 class="text-[11px] font-bold text-blue-400 uppercase tracking-wider">Total Kontribusi</h4>
                        <div class="flex items-baseline gap-2 mt-1">
                            <!-- Angka statistik (bisa diganti variabel jika ada, contoh: {{ $total_kontribusi ?? 0 }}) -->
                            <span class="text-4xl font-black tracking-tight text-white">0</span>
                            <span class="text-xs text-slate-400">Poin</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection