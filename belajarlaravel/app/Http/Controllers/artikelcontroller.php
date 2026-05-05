<?php

namespace App\Http\Controllers;

use App\Models\Artikel; // Pastikan Model Artikel sudah kamu buat
use Illuminate\Http\Request;

class artikelcontroller extends Controller
{
    // Menampilkan daftar artikel
    public function index()
    {
        $data = Artikel::all();
        return view('artikel', ['semuaArtikel' => $data]);
    }

    // Menampilkan form tambah (INI YANG BIKIN PUTIH KALAU KOSONG)
    public function create()
    {
        return view('create');
    }

    // Menyimpan data ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect('/artikel')->with('success', 'Artikel Berhasil Ditambahkan!');
    }

    // Fungsi lainnya (show, edit, update, destroy) bisa kamu isi nanti
}