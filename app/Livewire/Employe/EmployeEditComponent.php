<?php

namespace App\Livewire\Employe;

use Livewire\Component;
use App\Models\Employe;
use App\Models\User;
use App\Models\Position;
use App\Models\Department;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class EmployeEditComponent extends Component
{
    use WithFileUploads;

    public $user_id;
    public $foto;
    public $position_id;
    public $department_id;
    public $telepon;
    public $alamat;
    public $employe_id;
    public $img;

    public function mount($employe_id)
    {
        $employe = Employe::where('id', $employe_id)->first();
        $this->user_id = $employe->user->id;
        $this->foto = $employe->foto;
        $this->position_id = $employe->position->id;
        $this->department_id = $employe->department->id;
        $this->telepon = $employe->telepon;
        $this->alamat = $employe->alamat;
        $this->$employe_id = $employe->id;
    }
    
    public function editEmploye()
    {
        $employe = Employe::find($this->employe_id);
        $employe->user_id = $this->user_id;
        if ($this->img) {
            $imagename = Carbon::now()->timestamp. '.' .$this->img->extension();
            $this->img->storeAs('Employe', $imagename);
            $employe->foto = $imagename;
        }
        $employe->position_id = $this->position_id;
        $employe->department_id = $this->department_id;
        $employe->telepon = $this->telepon;
        $employe->alamat = $this->alamat;
        $employe->save();

        session()->flash('notif', 'Karyawan Berhasil Di Update');
        return redirect()->route('employe.all');
    }


    public function render()
    {
        $employes = Employe::all();
        $positions = Position::all();
        $users = User::all();
        $departments = Department::all();
        return view('livewire.employe.employe-edit-component', [
            'employes'=> $employes,
            'positions'=> $positions,
            'users'=> $users,
            'departments'=> $departments
        ])->layout('layout.fe-employe');
    }
}
