<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <div class="max-w-2xl mx-auto py-12 px-4">
        <!-- Tombol Kembali -->
        <div class="mb-6">
            <a href="/home" class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center">
                ← Kembali ke Dashboard
            </a>
        </div>

        <div class="bg-white shadow-md rounded-2xl p-8 border border-gray-100">
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Edit Pengaturan Profil</h2>
                <p class="text-gray-500">Perbarui informasi akun Anda di bawah ini.</p>
            </div>

            <form action="#" method="POST" class="space-y-6">
                <!-- CSRF Token (Penting di Laravel) -->
                @csrf
                <!-- Method Spoofing (Gunakan PUT untuk Edit) -->
                @method('PUT')

                <!-- Input Nama -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" name="name" id="name" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                           placeholder="Masukkan nama..." value="Nama Pengguna Sebelumnya">
                </div>

                <!-- Input Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                    <input type="email" name="email" id="email" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                           placeholder="email@contoh.com" value="user@example.com">
                </div>

                <!-- Input Bio -->
                <div>
                    <label for="bio" class="block text-sm font-semibold text-gray-700 mb-2">Bio Singkat</label>
                    <textarea name="bio" id="bio" rows="4" 
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                              placeholder="Ceritakan sedikit tentang Anda...">Halo! Saya sedang belajar Laravel.</textarea>
                </div>

                <!-- Tombol Action -->
                <div class="flex items-center justify-end space-x-4 pt-4">
                    <button type="button" class="text-gray-600 hover:text-gray-800 font-medium text-sm">
                        Batalkan
                    </button>
                    <button type="submit" 
                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-lg font-bold shadow-md transition duration-200">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>