<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Peminjaman;

class KoleksiBukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('koleksi_buku', ['buku' => $buku]);
    }

    // Menyimpan permintaan peminjaman buku oleh peminjam
    public function store(Request $request)
    {
        // Validasi data permintaan peminjaman
        $request->validate([
            'id_buku' => 'required|exists:buku,id_buku',
        ]);

        // Cek apakah buku tersedia
        $buku = Buku::findOrFail($request->id_buku);

        // Buat entri peminjaman baru
        Peminjaman::create([
            'id_buku' => $buku->id_buku,
            'tanggal_pinjam' => now(), // Tanggal peminjaman adalah tanggal saat ini
            // Anda dapat menambahkan kolom lain seperti ID peminjam di sini jika diperlukan
        ]);

        return redirect()->route('koleksi_buku')
            ->with('success', 'Permintaan peminjaman berhasil diajukan.');
    }
}
