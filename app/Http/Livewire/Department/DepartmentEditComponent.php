<?php

namespace App\Livewire\Department;

use Livewire\Component;
use App\Models\Department;

class DepartmentEditComponent extends Component
{
    public $nama;
    public $department_id;

    public function mount($department_id)
    {
        $department = Department::where('id', $department_id)->first();
        $this->nama = $department->nama;
        $this->department_id = $department->id;
        $department->save();
    }

    public function editDepartment()
    {
        $this->validate([
            'nama' => 'required',
        ]);

        $department = Department::find($this->department_id);
        $department->nama = $this->nama;
        $department->save();

        session()->flash('notif', 'Kategori Department Berhasil Diupdate');
        return redirect()->route('department.all');
    }

    public function render()
    {
        return view('livewire.department.department-edit-component')->layout('layout.fe-employe');
    }
}