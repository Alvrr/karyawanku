<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class UserComponent extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.users.user-component', [
            'users' => $users
        ])->layout('layout.fe-employe');
    }
}
