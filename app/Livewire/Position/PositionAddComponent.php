<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class PositionAddComponent extends Component
{
    // Properti untuk menyimpan nama posisi baru
    public $nama;

    // Metode untuk menambahkan posisi baru
    public function addPosition()
    {
        // Validasi input yang diperlukan untuk menambahkan posisi
        $this->validate([
            'nama' => 'required',
        ]);

        // Membuat instance baru dari model Position
        $position = new Position();
        // Mengisi nama posisi dengan nilai dari input
        $position->nama = $this->nama;
        // Menyimpan data posisi ke dalam database
        $position->save();

        // Menampilkan notifikasi bahwa posisi berhasil ditambahkan
        session()->flash('notif', 'Kategori Position Berhasil Ditambahkan');
        
        // Mengarahkan pengguna ke halaman yang menampilkan semua posisi
        return redirect()->route('position.all');
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.position.position-add-component')->layout('layout.fe-employe');
    }
}
