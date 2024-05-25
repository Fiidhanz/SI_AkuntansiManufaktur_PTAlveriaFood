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
        Schema::create('produksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_Produk');
            $table->string('Nama_Barang', 30);
            $table->date('Tanggal_Produksi');
            $table->integer('Total_Produksi');
            $table->string('Satuan', 10);
            $table->date('Expired');
            $table->timestamps();

            $table->foreign('id_Produk')->references('id')->on('Produks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produksis');
    }
};
