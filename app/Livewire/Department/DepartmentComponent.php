<?php

namespace App\Livewire\Department;

use Livewire\Component;
use App\Models\Department;

class DepartmentComponent extends Component
{
    // Metode untuk menghapus department berdasarkan ID
    public function deleteDepartment($id)
    {
        // Mencari department berdasarkan ID
        $department = Department::find($id);

        // Menghapus department jika ditemukan
        if ($department) {
            $department->delete();
            // Menampilkan notifikasi bahwa penghapusan berhasil
            session()->flash('notif', 'Delete Berhasil');
        } else {
            // Menampilkan notifikasi jika department tidak ditemukan
            session()->flash('notif', 'Department Tidak Ditemukan');
        }
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Mengambil semua data department dari database
        $departments = Department::all();

        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.department.department-component', [
            'departments' => $departments
        ])->layout('layout.fe-employe');
    }
}
