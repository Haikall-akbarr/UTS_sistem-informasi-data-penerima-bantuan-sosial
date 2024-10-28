<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBantuanTable extends Migration
{
    public function up()
    {
        Schema::create('bantuan', function (Blueprint $table) {
            $table->id('id_bantuan');
            $table->string('nama_bantuan', 100);
            $table->text('deskripsi')->nullable();
            $table->decimal('nilai_bantuan', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bantuan');
    }
}
