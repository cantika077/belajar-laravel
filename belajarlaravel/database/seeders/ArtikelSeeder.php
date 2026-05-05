<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        // Ini data artikel contoh yang akan muncul otomatis
        Artikel::create([
            'judul' => 'Tutorial Laravel Dasar',
            'isi' => 'Pelajari cara membuat website dengan Laravel dari nol. Ini adalah langkah awal untuk menjadi web developer profesional.',
        ]);

        Artikel::create([
            'judul' => 'Keindahan Alam Indonesia',
            'isi' => 'Indonesia memiliki hutan tropis yang sangat luas dan indah, menjadi paru-paru dunia yang harus kita jaga.',
        ]);
    }
}