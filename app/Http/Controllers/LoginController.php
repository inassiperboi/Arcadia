<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Peminjam;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('masuk');
    }

    public function login(Request $request)
    {
        $request->validate([
            'user_peminjam' => 'required|string|max:10',
            'pass_peminjam' => 'required|string|max:8',
        ]);

        $peminjam = Peminjam::where('user_peminjam', $request->user_peminjam)->first();

        if ($peminjam && Hash::check($request->pass_peminjam, $peminjam->pass_peminjam)) {

            Auth::login($peminjam);
            return redirect()->intended('dashboard'); 
        }

        return back()->withErrors([
            'user_peminjam' => 'User atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
