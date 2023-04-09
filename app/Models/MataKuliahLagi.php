<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahLagi extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah_lagi';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'nama',
        'dosen',
        'sks',
    ];
}
