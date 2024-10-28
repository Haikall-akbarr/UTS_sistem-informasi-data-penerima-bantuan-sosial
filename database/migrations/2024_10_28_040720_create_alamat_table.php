<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatTable extends Migration
{
    public function up()
    {
        Schema::create('alamat', function (Blueprint $table) {
            $table->id('id_alamat');
            $table->string('provinsi', 50);
            $table->string('kota_kabupaten', 50);
            $table->string('kecamatan', 50);
            $table->string('desa_kelurahan', 50);
            $table->char('kode_pos', 5);
            $table->text('alamat_lengkap');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alamat');
    }
}
