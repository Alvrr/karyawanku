<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class PositionComponent extends Component
{
    // Metode untuk menghapus posisi berdasarkan ID
    public function deletePosition($id)
    {
        // Mencari data posisi berdasarkan ID
        $position = Position::find($id);

        // Menghapus posisi jika ditemukan
        if ($position) {
            $position->delete();
            // Menampilkan notifikasi bahwa penghapusan berhasil
            session()->flash('notif', 'Delete Berhasil');
        } else {
            // Menampilkan notifikasi jika posisi tidak ditemukan
            session()->flash('notif', 'Posisi Tidak Ditemukan');
        }
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Mengambil semua data posisi dari database
        $positions = Position::all();

        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.position.position-component', [
            'positions' => $positions
        ])->layout('layout.fe-employe');
    }
}
