<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Peminjam;

class PeminjamSeeder extends Seeder
{
    public function run()
    {
        Peminjam::create([
            'id_peminjam' => 'P0001',
            'nama_peminjam' => 'Inas',
            'tgl_daftar' => now(),
            'user_peminjam' => 'inas',
            'pass_peminjam' => Hash::make('password'),
            'status_peminjam' => 1,
        ]);
    }
}
