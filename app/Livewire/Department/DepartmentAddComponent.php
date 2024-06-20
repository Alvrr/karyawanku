<?php

namespace App\Livewire\Department;

use Livewire\Component;
use App\Models\Department;

class DepartmentAddComponent extends Component
{
    // Properti untuk menyimpan nama department yang akan ditambahkan
    public $nama;

    // Metode untuk menambahkan department baru
    public function addDepartment()
    {
        // Validasi input nama department
        $this->validate([
            'nama' => 'required',
        ]);

        // Membuat instance baru dari model Department
        $department = new Department();
        // Mengisi properti nama dengan nilai yang telah divalidasi
        $department->nama = $this->nama;
        // Menyimpan department baru ke database
        $department->save();

        // Menampilkan notifikasi bahwa department berhasil ditambahkan
        session()->flash('notif', 'Kategori Department Berhasil Ditambahkan');
        // Mengarahkan pengguna ke halaman yang menampilkan semua department
        return redirect()->route('department.all');
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.department.department-add-component')->layout('layout.fe-employe');
    }
}
