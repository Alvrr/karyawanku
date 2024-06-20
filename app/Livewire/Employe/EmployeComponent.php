<?php

namespace App\Livewire\Employe;

use Livewire\Component;
use App\Models\Employe;

class EmployeComponent extends Component
{
    // Metode untuk menghapus data karyawan berdasarkan ID
    public function deleteEmploye($id)
    {
        // Mencari data karyawan berdasarkan ID
        $employe = Employe::find($id);

        // Menghapus karyawan jika ditemukan
        if ($employe) {
            $employe->delete();
            // Menampilkan notifikasi bahwa penghapusan berhasil
            session()->flash('notif', 'Karyawan Berhasil Didelete');
        } else {
            // Menampilkan notifikasi jika karyawan tidak ditemukan
            session()->flash('notif', 'Karyawan Tidak Ditemukan');
        }
    }
    
    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Mengambil semua data karyawan dari database
        $employes = Employe::all();

        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.employe.employe-component', [
            'employes' => $employes
        ])->layout('layout.fe-employe');
    }
}
