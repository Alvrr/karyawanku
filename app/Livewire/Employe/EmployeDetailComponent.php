<?php

namespace App\Livewire\Employe;

use Livewire\Component;
use App\Models\Employe;

class EmployeDetailComponent extends Component
{
    // Properti untuk menyimpan ID karyawan yang sedang ditampilkan detailnya
    public $employe_id;

    // Metode mount digunakan untuk menginisialisasi data saat komponen dimuat
    public function mount($employe_id)
    {
        // Memasukkan nilai ID karyawan ke dalam properti komponen
        $this->employe_id = $employe_id;
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Mengambil data karyawan berdasarkan ID
        $employe = Employe::where('id', $this->employe_id)->first();
        
        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.employe.employe-detail-component', [
            'employe' => $employe
        ])->layout('layout.fe-employe');
    }
}
