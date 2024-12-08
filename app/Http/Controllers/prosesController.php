<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prosesController extends Controller
{
    public function prosesPeminjaman(Request $request)
    {
        $selectedBooks = $request->input('books');
        $kodePinjam = $request->input('kode_pinjam');
        $alamatPinjam = $request->input('alamat_pinjam');
        $tglPesan = $request->input('tgl_pesan');
        $tglAmbil = $request->input('tgl_ambil');
        $tglWajibKembali = $request->input('tgl_wajib_kembali');

        $data = [
            'selected_books' => $selectedBooks,
            'kode_pinjam' => $kodePinjam,
            'alamat_pinjam' => $alamatPinjam,
            'tgl_pesan' => $tglPesan,
            'tgl_ambil' => $tglAmbil,
            'tgl_wajib_kembali' => $tglWajibKembali
        ];

        return view('prosespeminjaman', $data);
    }

    public function invoice(Request $request)
    {
        $selectedBooks = $request->input('books');
        $kodePinjam = $request->input('kode_pinjam');
        $alamatPinjam = $request->input('alamat_pinjam');
        $tglPesan = $request->input('tgl_pesan');
        $tglAmbil = $request->input('tgl_ambil');
        $tglWajibKembali = $request->input('tgl_wajib_kembali');

        // Logika untuk menangani data dan menyimpan ke database jika perlu

        return view('invoice', [
            'selected_books' => $selectedBooks,
            'kode_pinjam' => $kodePinjam,
            'alamat_pinjam' => $alamatPinjam,
            'tgl_pesan' => $tglPesan,
            'tgl_ambil' => $tglAmbil,
            'tgl_wajib_kembali' => $tglWajibKembali
        ]);
    }
}
