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

    // Properti untuk menyimpan data yang dibutuhkan untuk menambahkan karyawan
    public $user_id;
    public $foto;
    public $position_id;
    public $department_id;
    public $telepon;
    public $alamat;

    // Metode untuk menambahkan karyawan baru
    public function addEmploye()
    {
        // Validasi input yang diperlukan untuk menambahkan karyawan
        $this->validate([
            'user_id' => 'required',
            'foto' => 'required',
            'position_id'=> 'required',
            'department_id' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);

        // Membuat instance baru dari model Employe
        $employe = new Employe();
        // Mengisi properti karyawan dengan nilai dari inputan form
        $employe->user_id = $this->user_id;
        $imageName = Carbon::now()->timestamp. '.' .$this->foto->extension();
        $this->foto->storeAs('Employe', $imageName);
        $employe->foto = $imageName;
        $employe->position_id = $this->position_id;
        $employe->department_id = $this->department_id;
        $employe->telepon = $this->telepon;
        $employe->alamat = $this->alamat;
        // Menyimpan data karyawan ke dalam database
        $employe->save();

        // Menampilkan notifikasi bahwa karyawan berhasil ditambahkan
        session()->flash('notif', 'Karyawan Berhasil Ditambahkan');
        
        // Mengarahkan pengguna ke halaman yang menampilkan semua data profil
        return redirect()->route('profile.all');
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Mengambil data karyawan, posisi, pengguna, dan departemen dari database
        $employe = Employe::all();
        $positions = Position::all();
        $users = User::all();
        $departments = Department::all();

        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.profile.profile-add-component', [
            'employe'=> $employe,
            'positions'=> $positions,
            'users'=> $users,
            'departments'=> $departments
        ])->layout('layout.fe-employe');
    }
}
