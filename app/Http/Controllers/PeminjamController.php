<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Peminjam;

class PeminjamController extends Controller
{
    public function showRegistrationForm()
    {
        return view('daftar');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required|string|max:50',
            'user_peminjam' => 'required|string|max:10|unique:peminjam,user_peminjam',
            'pass_peminjam' => 'required|string|min:8',
        ]);

        // Menghasilkan id_peminjam baru
        $lastPeminjam = Peminjam::orderBy('id_peminjam', 'desc')->first();
        $newId = 'P0001';
        if ($lastPeminjam) {
            $lastIdNumber = (int)substr($lastPeminjam->id_peminjam, 1);
            $newId = 'P' . str_pad($lastIdNumber + 1, 4, '0', STR_PAD_LEFT);
        }

        Peminjam::create([
            'id_peminjam' => $newId,
            'nama_peminjam' => $request->nama_peminjam,
            'tgl_daftar' => now(),
            'user_peminjam' => $request->user_peminjam,
            'pass_peminjam' => Hash::make($request->pass_peminjam),
            'status_peminjam' => 1,
        ]);

        return redirect()->route('login')->with('success', 'Pendaftaran berhasil. Silakan login.');
    }
}
