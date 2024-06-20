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

    // Properti untuk menyimpan data yang dibutuhkan untuk mengedit karyawan
    public $user_id;
    public $foto;
    public $position_id;
    public $department_id;
    public $telepon;
    public $alamat;
    public $employe_id; // Perhatikan penulisan properti ini, tidak perlu menggunakan "$$" di depan
    public $img; // Perhatikan penulisan properti ini

    // Metode mount digunakan untuk menginisialisasi data saat komponen dimuat
    public function mount($employe_id)
    {
        // Mengambil data karyawan berdasarkan ID
        $employe = Employe::where('id', $employe_id)->first();
        
        // Mengisi nilai properti-properti karyawan yang akan diubah dengan nilai dari database
        $this->user_id = $employe->user->id;
        $this->foto = $employe->foto;
        $this->position_id = $employe->position->id;
        $this->department_id = $employe->department->id;
        $this->telepon = $employe->telepon;
        $this->alamat = $employe->alamat;
        $this->employe_id = $employe->id;
    }
    
    // Metode untuk menyimpan perubahan pada karyawan
    public function editEmploye()
    {
        // Mencari data karyawan berdasarkan ID
        $employe = Employe::find($this->employe_id);
        
        // Mengupdate data karyawan dengan nilai-nilai yang baru
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

        // Menampilkan notifikasi bahwa karyawan berhasil diupdate
        session()->flash('notif', 'Karyawan Berhasil Di Update');
        
        // Mengarahkan pengguna ke halaman yang menampilkan semua karyawan
        return redirect()->route('employe.all');
    }

    // Metode untuk merender tampilan komponen Livewire
    public function render()
    {
        // Mengambil semua data karyawan, posisi, pengguna, dan departemen dari database
        $employes = Employe::all();
        $positions = Position::all();
        $users = User::all();
        $departments = Department::all();
        
        // Menampilkan view yang terkait dengan komponen ini dan menggunakan layout tertentu
        return view('livewire.employe.employe-edit-component', [
            'employes'=> $employes,
            'positions'=> $positions,
            'users'=> $users,
            'departments'=> $departments
        ])->layout('layout.fe-employe');
    }
}
