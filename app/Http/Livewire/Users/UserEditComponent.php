<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class UserEditComponent extends Component
{
    public $name;
    public $email;
    public $user_id;

    public function mount($user_id)
    {
        $user = User::where('id', $user_id)->first();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->$user_id = $user->id;
    }

    public function editUser()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        session()->flash('notif', 'Edit Sukses');
        return redirect()->route('profile.all');
    }
    public function render()
    {
        return view('livewire.users.user-edit-component')->layout('layout.fe-employe');
    }
}
