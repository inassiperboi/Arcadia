<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam;

class FormulirController extends Controller
{
    /**
     * Menampilkan formulir peminjaman.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulir_peminjaman');
    }

    /**
     * Menyimpan data peminjaman.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir peminjaman
        $request->validate([
            'nama_peminjam' => 'required|string|max:255',
            'tgl_daftar' => 'required|date',
            'user_peminjam' => 'required|string|max:10',
            'pass_peminjam' => 'required|string|max:8',
            'status_peminjam' => 'required|string|max:255',
        ]);

        // Simpan data peminjam ke dalam database
        Peminjam::create([
            'nama_peminjam' => $request->nama_peminjam,
            'tgl_daftar' => $request->tgl_daftar,
            'user_peminjam' => $request->user_peminjam,
            'pass_peminjam' => $request->pass_peminjam,
            'status_peminjam' => $request->status_peminjam,
        ]);

        // Redirect ke halaman formulir dengan pesan sukses
        return redirect()->route('formulir_peminjaman')->with('success', 'Data peminjam berhasil disimpan.');
    }
}
