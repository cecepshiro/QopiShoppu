<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->unsignedBigInteger('id_pembeli')->nullable();
            $table->string('penerima', 50)->nullable();
            $table->string('provinsi', 50)->nullable();
            $table->string('kabupaten', 50)->nullable();
            $table->string('kecamatan', 50)->nullable();
            $table->text('alamat')->nullable();
            $table->char('kode_pos', 5)->nullable();
            $table->string('telp_penerima', 13)->nullable();
            $table->float('total_harga', 11, 0);
            $table->float('biaya_ekspedisi', 11, 0)->nullable();
            $table->integer('id_tf')->nullable();
            $table->text('bukti')->nullable();
            $table->string('resi', 25)->nullable();
            $table->enum('status', ['0','1','2','3','4']);
            $table->timestamps();
            $table->foreign('id_pembeli')->references('id_pembeli')->on('pembeli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['id_pembeli']);
        $table->dropColumn(['id_pembeli']);
        Schema::dropIfExists('transaksi');
    }
}
