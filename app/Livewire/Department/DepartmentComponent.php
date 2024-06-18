<?php

namespace App\Livewire\Department;

use Livewire\Component;
use App\Models\Department;

class DepartmentComponent extends Component
{
    public function deleteDepartment($id)
    {
        $department = Department::find($id);
        $department->delete();
        session()->flash('notif', 'Delete Berhasil');
    }

    public function render()
    {
        $departments = Department::all();
        return view('livewire.department.department-component', [
            'departments' => $departments
        ])->layout('layout.fe-employe');
    }
}
