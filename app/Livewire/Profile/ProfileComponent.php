<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth; // Menggunakan Facade untuk Auth
use App\Models\Employe;

class ProfileComponent extends Component
{
    // Metode untuk menghapus data karyawan berdasarkan ID
    public function deleteEmploye($id)
    {
        // Mencari data karyawan berdasarkan ID
        $employe = Employe::find($id);

        // Menghapus data karyawan jika ditemukan
        if ($employe) {
            $employe->delete();
            // Menampilkan notifikasi bahwa penghapusan berhasil
            session()->flash('notif', 'Karyawan Berhasil Didelete');
        } else {
            // Menampilkan notifikasi jika data karyawan tidak ditemukan
            session()->flash('notif', 'Karyawan Tidak Ditemukan');
        }
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Mengambil data karyawan berdasarkan ID pengguna yang sedang login (Auth::user()->id)
        $employes = Employe::where('user_id', Auth::user()->id)->get();

        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.profile.profile-component', [
            'employes' => $employes
        ])->layout('layout.fe-employe');
    }
}
