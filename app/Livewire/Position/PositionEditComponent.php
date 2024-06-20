<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class PositionEditComponent extends Component
{
    // Properti untuk menyimpan nama posisi dan ID posisi yang akan diubah
    public $nama;
    public $position_id;

    // Metode mount digunakan untuk menginisialisasi data saat komponen dimuat
    public function mount($position_id)
    {
        // Mengambil data posisi berdasarkan ID
        $position = Position::where('id', $position_id)->first();
        
        // Mengisi nilai properti nama dengan nama posisi yang sudah ada
        $this->nama = $position->nama;
        // Mengisi nilai properti position_id dengan ID posisi yang sudah ada
        $this->position_id = $position->id;
    }

    // Metode untuk menyimpan perubahan pada posisi
    public function editPosition()
    {
        // Validasi input yang diperlukan untuk mengedit posisi
        $this->validate([
            'nama' => 'required',
        ]);

        // Mencari data posisi berdasarkan ID
        $position = Position::find($this->position_id);
        // Mengupdate nama posisi dengan nilai baru dari input
        $position->nama = $this->nama;
        // Menyimpan data posisi yang sudah diupdate ke dalam database
        $position->save();

        // Menampilkan notifikasi bahwa posisi berhasil diupdate
        session()->flash('notif', 'Kategori Position Berhasil Diupdate');
        
        // Mengarahkan pengguna ke halaman yang menampilkan semua posisi
        return redirect()->route('position.all');
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.position.position-edit-component')->layout('layout.fe-employe');
    }
}
