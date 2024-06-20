<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // Metode ini untuk menampilkan halaman login atau mengarahkan pengguna yang sudah login
    public function index()
    {
        // Memeriksa apakah pengguna sudah login
        if ($user = Auth::user()) {
            // Jika pengguna adalah admin, diarahkan ke dashboard admin
            if($user->role == 'admin') {
                return redirect()->intended('dashboard-component');
            // Jika pengguna adalah pengguna biasa, diarahkan ke halaman semua karyawan
            }elseif($user->role == 'normal_user') {
                return redirect()->intended('all-employe');
            }
        }
        // Jika belum login, menampilkan halaman login
        return view('login');
    }

    // Metode ini untuk menangani proses login
    public function aksilogin(Request $request)
    {
        // Validasi input email dan password
        request()->validate([
            'email'=>'required',
            'password' => 'required'
        ]);

        // Menangkap input email dan password dari request
        $cek = $request->only('email','password');

        // Mencoba melakukan autentikasi dengan email dan password yang diberikan
        if(Auth::attempt($cek)){
            // Jika berhasil login, mengambil data pengguna yang sudah login
            $user = Auth::user();
            // Jika pengguna adalah admin, diarahkan ke dashboard admin
            if($user->role == 'admin'){
                return redirect()->intended('dashboard-component');
            // Jika pengguna adalah pengguna biasa, diarahkan ke halaman semua karyawan
            }elseif($user->role == 'normal_user'){
                return redirect()->intended('all-employe');
            }
            // Jika peran pengguna tidak dikenali, diarahkan ke halaman utama
            return redirect()->intended('/');
        }
        // Jika login gagal, menampilkan notifikasi kesalahan dan mengarahkan kembali ke halaman login
        session()->flash('notif', 'Mohon diperiksa kembali');
        return redirect('/');
    }

    // Metode ini untuk menangani proses logout
    public function aksilogout()
    {
        // Melakukan proses logout
        Auth::logout();
        // Menampilkan notifikasi sukses logout
        session()->flash('notif', 'Logout Success');
        // Mengarahkan ke halaman login
        return redirect()->route('login');
    }
}
