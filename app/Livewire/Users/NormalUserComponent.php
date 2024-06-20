<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class NormalUserComponent extends Component
{
    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Mengambil data pengguna (user) berdasarkan ID pengguna yang sedang login (Auth::user()->id)
        $users = User::where('id', Auth::user()->id)->get();
        
        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.users.normal-user-component', [
            'users' => $users
        ])->layout('layout.fe-employe');
    }
}
