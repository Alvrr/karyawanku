<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class UserComponent extends Component
{
    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Mengambil semua data pengguna (user) dari model User
        $users = User::all();
        
        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.users.user-component', [
            'users' => $users
        ])->layout('layout.fe-employe');
    }
}
