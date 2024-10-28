<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $fillable = [
        'provinsi',
        'kota_kabupaten',
        'kecamatan',
        'desa_kelurahan',
        'kode_pos',
        'alamat_lengkap',
    ];

    // Relasi ke tabel Penerima
    public function penerima()
    {
        return $this->hasMany(Penerima::class, 'id_alamat');
    }
}
