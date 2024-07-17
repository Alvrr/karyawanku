<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class role
{
    /**
     * Menangani permintaan yang masuk.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string  $roles
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        // Memeriksa apakah pengguna sudah login atau belum
        if (!Auth::check()) {
            // Jika belum login, pengguna akan diarahkan ke halaman utama
            return redirect('/');
        }

        // Mendapatkan informasi pengguna yang sedang login
        $user = Auth::user();

        // Memeriksa apakah peran pengguna sesuai dengan peran yang diperlukan
        if ($user->role == $roles) {
            // Jika sesuai, lanjutkan permintaan ke tujuan berikutnya
            return $next($request);
        }

        // Jika peran tidak sesuai, arahkan pengguna ke halaman login
        return redirect('login');
    }
}
