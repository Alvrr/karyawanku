<?php

namespace App\Livewire\Employe;

use Livewire\Component;
use App\Models\Employe;

class EmployeDetailComponent extends Component
{
    public $employe_id;

    public function mount($employe_id)
    {
        $this->employe_id = $employe_id;

    }

    public function render()
    {
        $employe = Employe::where('id', $this->employe_id)->first();
        return view('livewire.employe.employe-detail-component', [
            'employe' => $employe
        ])->layout('layout.fe-employe');
    }
}
