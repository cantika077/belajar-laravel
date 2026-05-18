@extends('main')

@section('container')
<div class="relative overflow-hidden bg-slate-900 min-h-[calc(100vh-80px)] flex items-center text-white">
    
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),
            linear-gradient(to_bottom,#1e293b_1px,transparent_1px)] bg-[size:4rem_4rem]
             [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] opacity-40"></div>

    <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-blue-500/20 rounded-full filter blur-[120px]
             -z-10 animate-pulse"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-indigo-500/20 rounded-full filter blur-[120px] -z-10"></div>

    <main class="max-w-7xl mx-auto px-6 sm:px-10 py-16 w-full relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center w-full">
            
            <div class="space-y-8 text-center lg:text-left order-2 lg:order-1">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-blue-500/10 border border-blue-500/30 text-blue-400 rounded-full
                 text-xs font-semibold uppercase tracking-widest backdrop-blur-md shadow-inner">
                    <span class="w-2 h-2 bg-blue-400 rounded-full animate-ping"></span>
                    🚀 Ruang Kreativitas Digital
                </span>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-none text-white">
                    Selamat Datang di <br>
                    <span class="bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400 bg-clip-text text-transparent drop-shadow-sm">
                        Dunia Ide
                    </span>
                </h1>
                
                <p class="text-slate-400 text-lg leading-relaxed max-w-xl mx-auto lg:mx-0 font-medium">
                    Temukan artikel menarik, pelajari wawasan baru, dan bagikan pemikiran kreatif Anda tanpa batas bersama komunitas 
                    <span class="text-blue-400 font-semibold">WEB_CAN</span>.
                </p>
                
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-5 pt-4">
                    <a href="/artikel" class="group relative px-8 py-4 bg-gradient-to-r from-blue-500 to-indigo-500 text-white font-bold
                     rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl
                      hover:shadow-blue-500/40">
                        Jelajahi Artikel
                        <span class="absolute inset-0 w-full h-full rounded-xl bg-white/10 opacity-0 group-hover:opacity-100 
                        transition-opacity"></span>
                    </a>
                    
                    <a href="/artikel/create" class="px-8 py-4 bg-slate-800/80 hover:bg-slate-800 text-slate-200 font-bold rounded-xl 
                    border border-slate-700 backdrop-blur-sm transition-all duration-300 transform hover:-translate-y-1 
                    hover:border-slate-600 shadow-sm">
                        Mulai Menulis
                    </a>
                </div>
            </div>

            <div class="flex justify-center order-1 lg:order-2">
                <div class="relative w-full max-w-sm sm:max-w-md flex justify-center group">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-blue-500/30 rounded-full filter 
                    blur-3xl opacity-80 -z-10 group-hover:bg-indigo-500/40 transition-all duration-700"></div>
                    
                    <div class="relative p-3 bg-slate-800/40 border border-slate-700/60 rounded-3xl backdrop-blur-md shadow-2xl 
                    transition-all duration-500 group-hover:border-blue-500/40 group-hover:shadow-blue-500/10">
                        <img 
                            src="{{ asset('img/hero-ide.jpg') }}" 
                            alt="Dunia Ide" 
                            class="w-auto max-h-[360px] object-contain rounded-2xl transform group-hover:scale-[1.03] transition 
                            duration-500"
                        >
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>
@endsection