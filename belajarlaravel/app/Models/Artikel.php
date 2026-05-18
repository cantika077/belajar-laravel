<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // Menentukan nama tabel database jika berbeda (opsional)
    protected $table = 'artikels';

    // YANG DIUBAH: Memberikan izin akses mass assignment untuk kolom baru kita
    protected $fillable = [
        'judul',
        'gambar', // Mendaftarkan kolom gambar agar link URL internet bisa disimpan
        'isi'
    ];
}