<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->string('nama_produk', 50)->nullable();
            $table->text('text')->nullable();
            $table->float('harga', 25, 0)->nullable();
            $table->integer('berat')->nullable();
            $table->integer('stok');
            $table->text('gambar')->nullable();
            $table->timestamps();   
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['id_kategori']);
        $table->dropColumn(['id_kategori']);
        Schema::dropIfExists('produk');
    }
}
