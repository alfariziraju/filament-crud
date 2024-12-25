<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Menambahkan atribut yang dapat di-assign secara massal
    protected $fillable = [
        'nim',          // Menambahkan 'nim' ke dalam fillable
        'nama',         // Menambahkan 'nama' ke dalam fillable
        'jenis_kelamin',// Menambahkan 'jenis_kelamin' ke dalam fillable
        'alamat',       // Menambahkan 'alamat' ke dalam fillable
        'tanggal_lahir',// Menambahkan 'tanggal_lahir' ke dalam fillable
        'jurusan',      // Menambahkan 'jurusan' ke dalam fillable
    ];
}
