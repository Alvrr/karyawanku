<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model
    protected $table = "positions";

    // Menentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama'
    ];

    /**
     * Mendefinisikan relasi one-to-many dengan model Employee.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees()
    {
        // Relasi one-to-many dengan model Employee
        // Setiap position dapat memiliki banyak employee
        return $this->hasMany(Employee::class, 'position_id');
    }
}
