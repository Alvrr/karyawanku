<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use App\Models\Employe;
use App\Models\User;
use App\Models\Position;
use App\Models\Department;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class ProfileEditComponent extends Component
{
    use WithFileUploads;

    // Properti untuk menyimpan data yang akan diedit
    public $user_id;
    public $foto;
    public $position_id;
    public $department_id;
    public $telepon;
    public $alamat;
    public $employe_id;
    public $img;

    // Metode mount digunakan untuk menginisialisasi properti pada saat komponen dimuat
    public function mount($employe_id)
    {
        // Mengambil data karyawan berdasarkan ID yang diterima dan mengisi properti
        $employe = Employe::where('id', $employe_id)->first();
        $this->user_id = $employe->user->id;
        $this->foto = $employe->foto;
        $this->position_id = $employe->position->id;
        $this->department_id = $employe->department->id;
        $this->telepon = $employe->telepon;
        $this->alamat = $employe->alamat;
        $this->employe_id = $employe->id; // Memperbaiki typo pada properti $employe_id
    }

    // Metode untuk menyimpan perubahan data karyawan
    public function editEmploye()
    {
        // Mencari data karyawan berdasarkan ID yang akan diedit
        $employe = Employe::find($this->employe_id);
        // Mengupdate data karyawan dengan nilai baru dari properti yang diubah
        $employe->user_id = $this->user_id;
        if ($this->img) {
            $imageName = Carbon::now()->timestamp. '.' .$this->img->extension();
            $this->img->storeAs('Employe', $imageName);
            $employe->foto = $imageName;
        }
        $employe->position_id = $this->position_id;
        $employe->department_id = $this->department_id;
        $employe->telepon = $this->telepon;
        $employe->alamat = $this->alamat;
        // Menyimpan perubahan ke dalam database
        $employe->save();

        // Menampilkan notifikasi bahwa karyawan berhasil diupdate
        session()->flash('notif', 'Karyawan Berhasil Di Update');
        
        // Mengarahkan pengguna ke halaman yang menampilkan semua data profil
        return redirect()->route('profile.all');
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Mengambil data karyawan, posisi, pengguna, dan departemen dari database
        $employes = Employe::all();
        $positions = Position::all();
        $users = User::all();
        $departments = Department::all();

        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.profile.profile-edit-component', [
            'employes'=> $employes,
            'positions'=> $positions,
            'users'=> $users,
            'departments'=> $departments
        ])->layout('layout.fe-employe');
    }
}
