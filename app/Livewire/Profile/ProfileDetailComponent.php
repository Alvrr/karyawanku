<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use App\Models\Employe;

class ProfileDetailComponent extends Component
{
    // Properti untuk menyimpan ID karyawan yang akan ditampilkan detailnya
    public $employe_id;

    // Metode mount digunakan untuk menginisialisasi properti pada saat komponen dimuat
    public function mount($employe_id)
    {
        // Mengisi properti $employe_id dengan nilai yang diterima dari parameter
        $this->employe_id = $employe_id;
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Mengambil data karyawan berdasarkan ID yang disimpan dalam properti $employe_id
        $employe = Employe::where('id', $this->employe_id)->first();
        
        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.profile.profile-detail-component', [
            'employe' => $employe
        ])->layout('layout.fe-employe');
    }
}
