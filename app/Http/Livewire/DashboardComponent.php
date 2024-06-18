<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employe;
use App\Models\User;
use App\Models\Position;
use App\Models\Department;

class DashboardComponent extends Component
{
    public function render()
    {
        $employe = Employe::count();
        $positions = Position::count();
        $users = User::all();
        $users_count = User::count();
        $departments = Department::count();
        return view('livewire.dashboard-component', [
            'employe'=> $employe,
            'positions'=> $positions,
            'users'=> $users,
            'users_count' => $users_count,
            'departments'=> $departments
        ])->layout('layout.fe-employe');
    }
}
