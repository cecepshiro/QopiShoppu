<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_kategori', function (Blueprint $table) {
            $table->bigIncrements('id_sub_kategori');
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->string('sub_kategori', 50)->nullable();
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
        Schema::dropIfExists('sub_kategori');
    }
}
