<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tambahkan data buku
        Buku::create([
            'id_buku' => 'B001',
            'judul_buku' => 'Matahari',
            'tgl_terbit' => '2003-06-12',
            'nama_pengarang' => 'Tere Liye',
            'nama_penerbit' => 'Gramedia'
        ]);

        Buku::create([
            'id_buku' => 'B002',
            'judul_buku' => 'Bulan',
            'tgl_terbit' => '2004-08-10',
            'nama_pengarang' => 'Tere Liye',
            'nama_penerbit' => 'Gramedia'
        ]);

        Buku::create([
            'id_buku' => 'B003',
            'judul_buku' => 'Bintang',
            'tgl_terbit' => '2005-10-08',
            'nama_pengarang' => 'Tere Liye',
            'nama_penerbit' => 'Gramedia'
        ]);
    }
}
