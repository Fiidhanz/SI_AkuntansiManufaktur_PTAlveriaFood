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
        Schema::create('pemakaian_btkls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_Produksi');
            $table->unsignedBigInteger('id_Pegawai');
            $table->string('Nama_Pegawai', 10);
            $table->timestamps();

            $table->foreign('id_Pegawai')->references('id')->on('Pegawais');
            $table->foreign('id_Produksi')->references('id')->on('Produksis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemakaian_btkls');
    }
};
