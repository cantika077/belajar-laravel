@extends('main')

@section('container')
<div class="relative overflow-hidden bg-slate-900 min-h-[calc(100vh-80px)] text-white py-12">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),linear-gradient(to_bottom,#1e293b_1px,
    transparent_1px)] bg-[size:3rem_3rem] opacity-20"></div>

    <div class="max-w-6xl mx-auto px-6 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <div class="lg:col-span-5 space-y-6">
                <div class="space-y-2">
                    <span class="text-xs font-bold tracking-wider text-blue-400 uppercase">CONTACT US</span>
                    <h1 class="text-3xl md:text-4xl font-black tracking-tight uppercase">
                        Hubungi <span class="bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent">Kami</span>
                    </h1>
                    <p class="text-slate-400 text-sm leading-relaxed font-light">
                        Punya pertanyaan, kritik, atau saran terkait WEB_CAN? Jangan ragu untuk meninggalkan pesan. 
                        Tim kami akan segera merespons pesanmu!
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center gap-4 bg-slate-800/40 backdrop-blur-md border border-slate-700/40 p-4 rounded-xl">
                        <div class="w-10 h-10 rounded-lg bg-blue-500/10 border border-blue-500/30 flex items-center justify-center 
                        text-blue-400 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                            class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 
                                2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 
                                2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-slate-400 text-[10px] font-bold uppercase tracking-wider">Email Resmi</p>
                            <p class="text-sm text-white font-medium">angelandini12345@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 bg-slate-800/40 backdrop-blur-md border border-slate-700/40 p-4 rounded-xl">
                        <div class="w-10 h-10 rounded-lg bg-indigo-500/10 border border-indigo-500/30 flex items-center justify-center 
                        text-indigo-400 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                            class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 
                                2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 
                                1.293c-2.824-1.802-5.122-4.1-6.924-6.924l1.293-.97a1.248 1.248 0 0 0 .417-1.173L6.963 3.102a1.125 
                                1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-slate-400 text-[10px] font-bold uppercase tracking-wider">Telepon / WhatsApp</p>
                            <p class="text-sm text-white font-medium">+62 889-5872-086</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 bg-slate-800/40 backdrop-blur-md border border-slate-700/40 p-4 rounded-xl">
                        <div class="w-10 h-10 rounded-lg bg-blue-500/10 border border-blue-500/30 flex items-center justify-center 
                        text-blue-400 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 
                                4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-slate-400 text-[10px] font-bold uppercase tracking-wider">Lokasi Kantor</p>
                            <p class="text-sm text-white font-medium">Salatiga, Jawa Tengah, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7">
                <form action="#" class="bg-slate-800/40 backdrop-blur-md border border-slate-700/60 rounded-2xl p-6 md:p-8 space-y-5 
                shadow-2xl">
                    <h2 class="text-lg font-bold uppercase tracking-wide border-b border-slate-700/50 pb-3">Kirim Pesan</h2>
                    
                    <div class="space-y-1.5">
                        <label class="text-[11px] font-bold tracking-wider text-slate-400 uppercase">Nama Lengkap</label>
                        <input 
                            type="text" 
                            placeholder="Masukkan nama lengkap Anda..." 
                            class="w-full bg-slate-900/60 border border-slate-700/50 rounded-xl px-4 py-3 text-sm text-white 
                            focus:outline-none focus:border-blue-500 transition-colors placeholder-slate-500"
                        >
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-[11px] font-bold tracking-wider text-slate-400 uppercase">Alamat Email</label>
                        <input 
                            type="email" 
                            placeholder="contoh@email.com" 
                            class="w-full bg-slate-900/60 border border-slate-700/50 rounded-xl px-4 py-3 text-sm text-white 
                            focus:outline-none focus:border-blue-500 transition-colors placeholder-slate-500"
                        >
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-[11px] font-bold tracking-wider text-slate-400 uppercase">Pesan Anda</label>
                        <textarea 
                            rows="5" 
                            placeholder="Tuliskan apa yang ingin Anda tanyakan atau sampaikan..." 
                            class="w-full bg-slate-900/60 border border-slate-700/50 rounded-xl px-4 py-3 text-sm text-white 
                            focus:outline-none focus:border-blue-500 transition-colors resize-none placeholder-slate-500"
                        ></textarea>
                    </div>

                    <button 
                        type="submit" 
                        class="w-full py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 
                        text-white font-bold text-xs tracking-wider uppercase rounded-xl shadow-lg shadow-blue-500/20 transition-all 
                        flex items-center justify-center gap-2"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" 
                        class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 
                            59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                        </svg>
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection