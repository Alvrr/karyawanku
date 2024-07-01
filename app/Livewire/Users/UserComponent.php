<?php
namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class UserComponent extends Component
{
    // Metode untuk menghapus pengguna berdasarkan ID
    public function deleteUser($userId)
    {
        // Mencari data pengguna berdasarkan ID
        $user = User::find($userId);

        // Menghapus pengguna jika ditemukan
        if ($user) {
            $user->delete();
            // Menampilkan notifikasi bahwa penghapusan berhasil
            session()->flash('notif', 'Pengguna Berhasil Dihapus');
        } else {
            // Menampilkan notifikasi jika pengguna tidak ditemukan
            session()->flash('notif', 'Pengguna Tidak Ditemukan');
        }
    }

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
