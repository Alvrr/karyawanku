<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = "positions";
    protected $fillable = [
        'nama'
    ];


    public function employe()
    {
       return $this->hasMany(Employe::class, 'id');
    }
}
