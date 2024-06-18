<?php

namespace App\Livewire\Department;

use Livewire\Component;
use App\Models\Department;

class DepartmentAddComponent extends Component
{
    public $nama;

    public function addDepartment()
    {
        $this->validate([
            'nama' => 'required',
        ]);

        $department = new Department();
        $department->nama = $this->nama;
        $department->save();

        session()->flash('notif', 'Kategori Department Berhasil Ditambahkan');
        return redirect()->route('department.all');
    }


    public function render()
    {
        return view('livewire.department.department-add-component')->layout('layout.fe-employe');
    }
}
