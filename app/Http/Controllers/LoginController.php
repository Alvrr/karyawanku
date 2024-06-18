<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if($user->role == 'admin') {
                return redirect()->intended('dashboard-component');
            }elseif($user->role == 'normal_user') {
                return redirect()->intended('all-employe');
            }
        }
        return view('login');
    }

    public function aksilogin(Request $request)
    {
        request()->validate([
            'email'=>'required',
            'password' => 'required'
        ]);

        $cek = $request->only('email','password');

        if(Auth::attempt($cek)){
            $user = Auth::user();
            if($user->role == 'admin'){
                return redirect()->intended('dashboard-component');
            }elseif($user->role == 'normal_user'){
                return redirect()->intended('all-employe');
            }
            return redirect()->intended('/');
        }
        session()->flash('notif', 'Mohon diperiksa kembali');
        return redirect('/');
    }

    public function aksilogout()
    {
        Auth::logout();
        session()->flash('notif', 'Logout Success');
        return redirect()->route('login');
    }
}
