<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class NormalUserComponent extends Component
{
    public function render()
    {
        $users = User::where('id', Auth::user()->id)->get();
        return view('livewire.users.normal-user-component', [
            'users' => $users
        ])->layout('layout.fe-employe');
    }
}
