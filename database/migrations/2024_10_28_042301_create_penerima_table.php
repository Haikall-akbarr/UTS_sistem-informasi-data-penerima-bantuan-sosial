<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaTable extends Migration
{
    public function up()
    {
        Schema::create('penerima', function (Blueprint $table) {
            $table->id('id_penerima');
            $table->string('nama', 100);
            $table->char('nik', 16)->unique();
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->unsignedBigInteger('id_alamat');
            $table->enum('status_keluarga', ['Kepala Keluarga', 'Anggota']);
            $table->string('telepon', 15)->nullable();
            $table->timestamps();

            $table->foreign('id_alamat')->references('id_alamat')->on('alamat')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('penerima');
    }
}
