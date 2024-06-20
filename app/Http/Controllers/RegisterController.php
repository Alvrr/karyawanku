<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Metode ini untuk menampilkan halaman registrasi pengguna biasa
    public function index()
    {
        return view('register');
    }

    // Metode ini untuk menampilkan halaman registrasi admin
    public function index2()
    {
        return view('registerAdmin');
    }

    // Metode ini untuk menangani proses registrasi
    public function aksireg(Request $request)
    {
        // Validasi input data registrasi
        $data_register = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        // Meng-hash password sebelum disimpan ke database
        $data_register['password'] = Hash::make($data_register['password']);

        // Membuat pengguna baru dengan data yang telah divalidasi dan di-hash
        User::create($data_register);

        // Menampilkan notifikasi bahwa registrasi berhasil
        session()->flash('notif', 'Registrasi Berhasil');

        // Mengarahkan pengguna ke halaman login setelah registrasi sukses
        return redirect()->route('login');
    }
}
