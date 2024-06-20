<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class UserEditComponent extends Component
{
    public $name;        // Variabel untuk menyimpan nama pengguna
    public $email;       // Variabel untuk menyimpan email pengguna
    public $user_id;     // Variabel untuk menyimpan ID pengguna

    public function mount($user_id)
    {
        // Mengambil data pengguna berdasarkan ID yang diterima dan mengisi variabel dengan data tersebut
        $user = User::where('id', $user_id)->first();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->user_id = $user->id; // Penyesuaian penulisan variabel user_id
    }

    public function editUser()
    {
        // Validasi input nama dan email
        $this->validate([
            'name' => 'required',
            'email' => 'required|email' // Validasi bahwa input email harus berformat email
        ]);

        // Mengambil data pengguna yang akan diedit berdasarkan ID
        $user = User::find($this->user_id);
        $user->name = $this->name;   // Memperbarui nama pengguna dengan nilai baru
        $user->email = $this->email; // Memperbarui email pengguna dengan nilai baru
        $user->save();               // Menyimpan perubahan pada data pengguna

        // Flash session untuk memberi notifikasi bahwa edit berhasil
        session()->flash('notif', 'Edit Sukses');
        
        // Redirect ke route 'profile.all' setelah proses edit selesai
        return redirect()->route('profile.all');
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Menampilkan view 'user-edit-component' dan menggunakan layout 'fe-employe'
        return view('livewire.users.user-edit-component')->layout('layout.fe-employe');
    }
}
