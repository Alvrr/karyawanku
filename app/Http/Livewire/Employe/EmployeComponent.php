<?php

namespace App\Livewire\Employe;

use Livewire\Component;
use App\Models\Employe;

class EmployeComponent extends Component
{
    public function deleteEmploye($id)
    {
        $employe = Employe::find($id);
        $employe->delete();
        session()->flash('notif', 'Karyawan Berhasil Didelete');
    }
    
    public function render()
    {
        $employes = Employe::all();
        return view('livewire.employe.employe-component', [
            'employes' => $employes
        ])->layout('layout.fe-employe');
    }
}
