<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $table = 'keluarga';

    protected $fillable = [
        'id_penerima',
        'hubungan',
    ];

    // Relasi ke tabel penerima
    public function penerima()
    {
        return $this->belongsTo(Penerima::class, 'id_penerima');
    }
}
