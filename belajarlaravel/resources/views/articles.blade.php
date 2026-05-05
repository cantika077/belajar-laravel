<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Artikel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

    <!-- Header / Hero Section -->
    <header class="bg-white border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-6 py-12 text-center">
            <h1 class="text-4xl font-black text-gray-900 mb-4">Wawasan & Cerita</h1>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto">
                Temukan kumpulan artikel terbaru seputar teknologi, pemrograman, dan desain di sini.
            </p>
        </div>
    </header>

    <!-- Filter/Kategori Simpel -->
    <div class="max-w-6xl mx-auto px-6 mt-8">
        <div class="flex flex-wrap gap-4 justify-center">
            <button class="px-4 py-2 bg-indigo-600 text-white rounded-full text-sm font-semibold shadow-md">Semua</button>
            <button class="px-4 py-2 bg-white text-gray-600 hover:bg-gray-100 rounded-full text-sm font-semibold border border-gray-200 transition">Teknologi</button>
            <button class="px-4 py-2 bg-white text-gray-600 hover:bg-gray-100 rounded-full text-sm font-semibold border border-gray-200 transition">Tutorial</button>
            <button class="px-4 py-2 bg-white text-gray-600 hover:bg-gray-100 rounded-full text-sm font-semibold border border-gray-200 transition">Berita</button>
        </div>
    </div>

    <!-- Main Content: Grid Artikel -->
    <main class="max-w-6xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Loop Postingan (Contoh Statis) -->
            @for ($i = 1; $i <= 6; $i++)
            <article class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <!-- Gambar Dummy -->
                <div class="h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                    <span class="text-4xl">🖼️</span>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-1 bg-indigo-50 text-indigo-600 rounded">Tutorial</span>
                        <span class="text-xs text-gray-400 font-medium">4 Mei 2026</span>
                    </div>
                    
                    <h2 class="text-xl font-bold text-gray-900 mb-2 hover:text-indigo-600 transition">
                        <a href="/artikel">Cara Cepat Belajar Framework Laravel dalam 30 Hari</a>
                    </h2>
                    
                    <p class="text-gray-500 text-sm line-clamp-3 mb-6">
                        Laravel menyediakan ekosistem yang luar biasa untuk developer. Dalam artikel ini kita akan membahas roadmap terbaik...
                    </p>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-xs">👤</div>
                            <span class="text-xs font-bold text-gray-700">Admin</span>
                        </div>
                        <a href="/artikel" class="text-indigo-600 text-xs font-bold hover:underline">Baca Selengkapnya →</a>
                    </div>
                </div>
            </article>
            @endfor

        </div>

        <!-- Pagination Sederhana -->
        <div class="mt-16 flex justify-center gap-2">
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 cursor-not-allowed">«</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-indigo-600 text-white font-bold">1</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 hover:bg-gray-50 font-bold transition">2</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 hover:bg-gray-50 transition">»</button>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-10 mt-10">
        <div class="max-w-6xl mx-auto px-6 text-center text-gray-500 text-sm">
            &copy; 2026 MyBlog. Dibuat dengan cinta dan Laravel.
        </div>
    </footer>

</body>
</html>