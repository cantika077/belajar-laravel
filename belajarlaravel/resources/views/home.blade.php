<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 tracking-tight">

    <!-- Navbar Sederhana -->
    <nav class="bg-white shadow-sm py-4 mb-8">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
            <span class="text-xl font-bold text-indigo-600 underline">MyLaravel</span>
            <div class="space-x-6 font-medium">
                <a href="/home" class="text-indigo-600">Home</a>
                <a href="/profile" class="text-gray-500 hover:text-indigo-600 transition">Profile</a>
                <a href="/hallo" class="text-gray-500 hover:text-indigo-600 transition">Hallo</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-6">
        <div class="bg-indigo-700 rounded-3xl p-8 md:p-12 text-white mb-8 shadow-lg">
            <h1 class="text-4xl font-extrabold mb-4">Selamat Datang Kembali! 🚀</h1>
            <p class="text-indigo-100 text-lg max-w-2xl">
                Ini adalah halaman utama (Home) aplikasi Anda. Dari sini, Anda bisa mengelola semua data dan melihat ringkasan 
                aktivitas terbaru.
            </p>
        </div>

        <!-- Grid Statistik / Menu -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <div class="text-indigo-500 font-bold uppercase text-xs mb-2">Total Project</div>
                <div class="text-3xl font-black">12</div>
            </div>
            
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <div class="text-green-500 font-bold uppercase text-xs mb-2">Status Server</div>
                <div class="text-3xl font-black text-green-600">Aktif</div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <div class="text-orange-500 font-bold uppercase text-xs mb-2">Pesan Baru</div>
                <div class="text-3xl font-black">5</div>
            </div>
        </div>
    </main>

</body>
</html>