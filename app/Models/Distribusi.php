<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    use HasFactory;

    protected $table = 'distribusi';

    protected $fillable = [
        'id_penerima',
        'id_bantuan',
        'tanggal_distribusi',
        'status',
    ];

    // Relasi ke tabel penerima
    public function penerima()
    {
        return $this->belongsTo(Penerima::class, 'id_penerima');
    }

    // Relasi ke tabel bantuan
    public function bantuan()
    {
        return $this->belongsTo(Bantuan::class, 'id_bantuan');
    }
}
