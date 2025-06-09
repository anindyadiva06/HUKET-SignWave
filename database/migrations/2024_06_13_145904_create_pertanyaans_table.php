<?php
// database/migrations/xxxx_xx_xx_create_pertanyaan_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->id('id_pertanyaan');
            $table->string('gambar')->nullable()->change();
            $table->text('deskripsi_pertanyaan');
            $table->integer('skor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pertanyaan');
    }
};
