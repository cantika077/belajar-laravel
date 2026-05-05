@extends('main')

@section('container')
<main class="max-w-4xl mx-auto px-10 py-12">
    <h1 class="text-3xl font-bold mb-8 text-gray-800">Hubungi Kami</h1>

    <div class="max-w-2xl">
        <form action="#" method="POST" class="space-y-4">
            <!-- Input Nama -->
            <div>
                <input type="text" placeholder="Nama" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Input Email -->
            <div>
                <input type="email" placeholder="Email" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Input Pesan -->
            <div>
                <textarea placeholder="Pesan" rows="5" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- Tombol Kirim -->
            <div>
                <button type="submit" 
                    class="bg-[#334155] text-white px-8 py-3 rounded-md font-semibold hover:bg-slate-800 transition shadow-sm">
                    Kirim
                </button>
            </div>
        </form>
    </div>
</main>
@endsection