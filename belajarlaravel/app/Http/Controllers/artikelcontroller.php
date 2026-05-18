<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $data = Artikel::all();
        return view('artikel', ['semuaArtikel' => $data]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'  => 'required|min:5|max:255',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'isi'    => 'required|min:10',
        ]);

        // Upload file
        $namaFile = time() . '_' . $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move(public_path('uploads'), $namaFile);

        Artikel::create([
            'judul'  => $request->judul,
            'gambar' => $namaFile,
            'isi'    => $request->isi,
        ]);

        return redirect('/artikel')->with('success', 'Artikel Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('show', compact('artikel'));
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'  => 'required|min:5|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'isi'    => 'required|min:10',
        ]);

        $artikel = Artikel::findOrFail($id);
        $namaFile = $artikel->gambar; // Pakai gambar lama dulu

        // Kalau ada upload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if (file_exists(public_path('uploads/' . $artikel->gambar))) {
                unlink(public_path('uploads/' . $artikel->gambar));
            }
            $namaFile = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('uploads'), $namaFile);
        }

        $artikel->update([
            'judul'  => $request->judul,
            'gambar' => $namaFile,
            'isi'    => $request->isi,
        ]);

        return redirect('/artikel')->with('success', 'Artikel Berhasil Diperbarui!');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        // Hapus file gambar
        if (file_exists(public_path('uploads/' . $artikel->gambar))) {
            unlink(public_path('uploads/' . $artikel->gambar));
        }

        $artikel->delete();
        return redirect('/artikel')->with('success', 'Artikel Berhasil Dihapus!');
    }
}