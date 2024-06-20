<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model
    protected $table = "departments";

    // Menentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama'
    ];

    /**
     * Mendefinisikan relasi one-to-many dengan model Employe.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees()
    {
        // Relasi one-to-many dengan model Employe
        // Setiap department dapat memiliki banyak employe
        return $this->hasMany(Employe::class, 'department_id', 'id');
    }
}
