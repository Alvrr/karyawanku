<?php

namespace App\Livewire\Department;

use Livewire\Component;
use App\Models\Department;

class DepartmentEditComponent extends Component
{
    // Properti untuk menyimpan nama department yang akan diubah dan ID department
    public $nama;
    public $department_id;

    // Metode mount digunakan untuk menginisialisasi data saat komponen dimuat
    public function mount($department_id)
    {
        // Mengambil data department berdasarkan ID
        $department = Department::where('id', $department_id)->first();
        
        // Memasukkan nilai nama department dan ID ke dalam properti komponen
        $this->nama = $department->nama;
        $this->department_id = $department->id;
    }

    // Metode untuk menyimpan perubahan pada department
    public function editDepartment()
    {
        // Validasi input nama department
        $this->validate([
            'nama' => 'required',
        ]);

        // Mencari department berdasarkan ID
        $department = Department::find($this->department_id);
        
        // Mengupdate nama department dengan nilai baru
        $department->nama = $this->nama;
        $department->save();

        // Menampilkan notifikasi bahwa department berhasil diupdate
        session()->flash('notif', 'Kategori Department Berhasil Diupdate');
        
        // Mengarahkan pengguna ke halaman yang menampilkan semua department
        return redirect()->route('department.all');
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.department.department-edit-component')->layout('layout.fe-employe');
    }
}
