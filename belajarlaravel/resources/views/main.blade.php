<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB_CAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-white text-gray-900">
 
    <nav class="flex justify-between items-center px-10 py-6 max-w-7xl mx-auto border-b border-gray-50">
        <div class="text-xl font-extrabold tracking-tighter">WEB_CAN</div>
        <div class="flex items-center gap-8 font-medium text-gray-600 text-sm">
            <a href="/" class="hover:text-black transition">Home</a>
            <a href="/artikel" class="hover:text-black transition">Artikel</a>
            <a href="/kontak" class="hover:text-black transition">Kontak</a>
            <a href="/profil" class="hover:text-black transition">Profil</a>
            <a href="#" class="bg-[#1D4ED8] text-white px-5 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Update</a>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
        </div>
    </nav>

    @yield('container')

</body>
</html>