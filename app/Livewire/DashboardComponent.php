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
        // Menghitung jumlah karyawan
        $employe = Employe::count();
        
        // Menghitung jumlah posisi jabatan
        $positions = Position::count();
        
        // Mengambil semua data pengguna (user)
        $users = User::all();
        
        // Menghitung jumlah pengguna (user)
        $users_count = User::count();
        
        // Menghitung jumlah departemen
        $departments = Department::count();
        
        // Menampilkan view 'dashboard-component' dengan mengirimkan data-data yang telah diambil
        return view('livewire.dashboard-component', [
            'employe'=> $employe,           // Jumlah karyawan
            'positions'=> $positions,       // Jumlah posisi jabatan
            'users'=> $users,               // Data semua pengguna
            'users_count' => $users_count,  // Jumlah pengguna
            'departments'=> $departments   // Jumlah departemen
        ])->layout('layout.fe-employe');    // Menggunakan layout 'fe-employe'
    }
}
