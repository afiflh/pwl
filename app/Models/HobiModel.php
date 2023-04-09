<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobiModel extends Model
{
    use HasFactory;

    protected $table = 'hobis';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'nama_hobi',
        'kategori_hobi',
        'deskripsi'
    ];
}
