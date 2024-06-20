<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    
    // Menentukan tabel yang digunakan oleh model ini
    protected $table = 'employes';
    
    // Menentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'user_id', 'foto', 'position_id', 'department_id', 'telepon', 'alamat'
    ];

    // Mendefinisikan relasi 'belongsTo' dengan model Position
    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    // Mendefinisikan relasi 'belongsTo' dengan model Department
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    // Mendefinisikan relasi 'belongsTo' dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

