<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribusiTable extends Migration
{
    public function up()
    {
        Schema::create('distribusi', function (Blueprint $table) {
            $table->id('id_distribusi');
            $table->unsignedBigInteger('id_penerima');
            $table->unsignedBigInteger('id_bantuan');
            $table->date('tanggal_distribusi');
            $table->enum('status', ['Diterima', 'Ditolak', 'Menunggu']);
            $table->timestamps();

            $table->foreign('id_penerima')->references('id_penerima')->on('penerima')->onDelete('cascade');
            $table->foreign('id_bantuan')->references('id_bantuan')->on('bantuan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('distribusi');
    }
}
