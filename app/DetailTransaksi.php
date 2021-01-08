<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table='detailtransaksi';
    protected $primaryKey='id_detail_transaksi';
    public $incrementing =false;
    public $timestamps=true; 
    protected $fillable = [
      'id_detail_transaksi','id_transaksi','id_produk','qty','subtotal','created_at','updated_at',
    ];

    //orm many to many -> data transaksi
    public function transaksi(){
     return $this->belongsTo('App\Transaksi', 'id_transaksi');
    } 

    //orm many to many -> data produk
    public function produk(){
     return $this->belongsTo('App\Produk', 'id_produk');
    }
}
