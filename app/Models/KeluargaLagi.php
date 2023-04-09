<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaLagi extends Model
{
    use HasFactory;

    protected $table = 'keluarga_lagi';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'nik',
        'nama',
        'jk',
        'tanggal_lahir'
    ];
}
