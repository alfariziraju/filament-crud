<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nip',
        'nama',
        'email',
        'jurusan',
    ];

    // Jika tabel menggunakan soft delete
    protected $dates = ['deleted_at'];
}
