<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluargaTable extends Migration
{
    public function up()
    {
        Schema::create('keluarga', function (Blueprint $table) {
            $table->id('id_keluarga');
            $table->unsignedBigInteger('id_penerima');
            $table->enum('hubungan', ['Suami', 'Istri', 'Anak', 'Orang Tua']);
            $table->timestamps();

            $table->foreign('id_penerima')->references('id_penerima')->on('penerima')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('keluarga');
    }
}
