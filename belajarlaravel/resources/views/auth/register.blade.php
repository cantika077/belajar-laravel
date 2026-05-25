<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - WEB_CAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-900 min-h-screen flex items-center justify-center text-white">

    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),
    linear-gradient(to_bottom,#1e293b_1px,transparent_1px)] bg-[size:3rem_3rem] opacity-20"></div>

    <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-blue-500/20 rounded-full filter blur-[120px]"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-indigo-500/20 rounded-full filter blur-[120px]"></div>

    <div class="relative z-10 w-full max-w-md px-6">

        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="text-2xl font-extrabold tracking-tighter">WEB_CAN</a>
            <p class="text-slate-400 text-sm mt-2">Buat akun baru</p>
        </div>

        <div class="bg-slate-800/40 backdrop-blur-md border border-slate-700/60 rounded-2xl p-8 shadow-2xl">

            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-500/10 border border-red-500/30 rounded-xl text-red-400 text-xs font-semibold">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nama -->
                <div class="mb-5">
                    <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Nama</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full bg-slate-900/60 border border-slate-700/60 rounded-xl px-4 py-3 text-sm text-white 
                        placeholder-slate-500 focus:outline-none focus:border-blue-500 transition"
                        placeholder="Nama lengkap kamu">
                </div>

                <!-- Email -->
                <div class="mb-5">
                    <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full bg-slate-900/60 border border-slate-700/60 rounded-xl px-4 py-3 text-sm text-white 
                        placeholder-slate-500 focus:outline-none focus:border-blue-500 transition"
                        placeholder="email@kamu.com">
                </div>

                <!-- Password -->
                <div class="mb-5">
                    <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Password</label>
                    <input type="password" name="password" required
                        class="w-full bg-slate-900/60 border border-slate-700/60 rounded-xl px-4 py-3 text-sm text-white 
                        placeholder-slate-500 focus:outline-none focus:border-blue-500 transition"
                        placeholder="••••••••">
                </div>

                <!-- Konfirmasi Password -->
                <div class="mb-6">
                    <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full bg-slate-900/60 border border-slate-700/60 rounded-xl px-4 py-3 text-sm text-white 
                        placeholder-slate-500 focus:outline-none focus:border-blue-500 transition"
                        placeholder="••••••••">
                </div>

                <button type="submit" class="w-full py-3 bg-gradient-to-r from-blue-500 to-indigo-500 text-white font-bold 
                rounded-xl shadow-lg shadow-blue-500/30 hover:shadow-blue-500/50 transition-all duration-300 
                hover:-translate-y-0.5">
                    Daftar
                </button>
            </form>

            <p class="text-center text-xs text-slate-400 mt-6">
                Sudah punya akun? 
                <a href="{{ route('login') }}" class="text-blue-400 font-bold hover:text-blue-300 transition">
                    Login sekarang
                </a>
            </p>

        </div>
    </div>

</body>
</html>