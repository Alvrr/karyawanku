<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function index2()
    {
        return view('registerAdmin');
    }

    public function aksireg(Request $request){

        $data_register = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role'=> 'required'
        ]);

        $data_register['password'] = Hash::make($data_register['password']);
        User::create($data_register);
        session()->flash('notif', 'Registrasi Berhasil');
        return redirect()->route('login');
    }
}
