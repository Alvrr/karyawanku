<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use App\Models\Employe;
use App\Models\User;
use App\Models\Position;
use App\Models\Department;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class ProfileAddComponent extends Component
{
    use WithFileUploads;
    public $user_id;
    public $foto;
    public $position_id;
    public $department_id;
    public $telepon;
    public $alamat;

    public function addEmploye()
    {
        $this->validate([
            'user_id' => 'required',
            'foto' => 'required',
            'position_id'=> 'required',
            'department_id' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);

        $employe = new Employe();
        $employe->user_id = $this->user_id;
        $imageName = Carbon::now()->timestamp. '.' .$this->foto->extension();
        $this->foto->storeAs('Employe', $imageName);
        $employe->foto = $imageName;
        $employe->position_id = $this->position_id;
        $employe->department_id = $this->department_id;
        $employe->telepon = $this->telepon;
        $employe->alamat = $this->alamat;
        $employe->save();


        session()->flash('notif', 'Karyawan Berhasil Ditambahkan');
        return redirect()->route('profile.all');
    }

    public function render()
    {
        $employe = Employe::all();
        $positions = Position::all();
        $users = User::all();
        $departments = Department::all();
        return view('livewire.profile.profile-add-component', [
            'employe'=> $employe,
            'positions'=> $positions,
            'users'=> $users,
            'departments'=> $departments
        ])->layout('layout.fe-employe');
    }
}
