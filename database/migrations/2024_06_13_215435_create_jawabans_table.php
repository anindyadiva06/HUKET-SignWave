<?php
// database/migrations/xxxx_xx_xx_create_jawaban_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->id('id_jawaban');
            $table->foreignId('id_pertanyaan')->constrained('pertanyaan', 'id_pertanyaan')->onDelete('cascade');
            $table->text('deskripsi_jawaban');
            $table->boolean('benar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
};
