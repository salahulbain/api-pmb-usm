<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();

            $table->string('nisn');
            $table->string('nama');
            $table->string('email');
            $table->string('password_pmb');
            $table->integer('kode_pilihan_1');
            $table->integer('kode_pilihan_2');
            $table->string('nama_pilihan_1');
            $table->string('nama_pilihan_2');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
