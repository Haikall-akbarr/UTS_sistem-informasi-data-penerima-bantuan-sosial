<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    use HasFactory;

    protected $table = 'bantuan'; // Nama tabel
    protected $primaryKey = 'id_bantuan'; // Nama primary key yang digunakan

    protected $fillable = [
        'nama_bantuan',
        'deskripsi',
        'nilai_bantuan',
    ];
}
