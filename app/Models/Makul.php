<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'kode_makul',
        'nama_makul',
        'sks',
    ];

    // Jika tabel menggunakan soft delete
    protected $dates = ['deleted_at'];
}
