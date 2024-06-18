<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Employe;

class ProfileComponent extends Component
{
    public function deleteEmploye($id)
    {
        $employe = Employe::find($id);
        $employe->delete();
        session()->flash('notif', 'Karyawan Berhasil Didelete');
    }

    public function render()
    {
        $employes = Employe::where('user_id', Auth::user()->id)->get();
        return view('livewire.profile.profile-component', [
            'employes' => $employes
        ])->layout('layout.fe-employe');
    }
}
