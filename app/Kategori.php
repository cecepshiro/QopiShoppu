<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table='kategori';
    protected $primaryKey='id_kategori';
    public $incrementing =false;
    public $timestamps=true; 
    protected $fillable = [
      'id_kategori','nama_kategori','gambar','created_at','updated_at',
    ];

    //orm one to many -> data produk
    public function produk(){
      return $this->hasMany('App\Produk');
    }

    //orm one to many -> data sub_kategori
    public function sub_kategori(){
      return $this->hasMany('App\SubKategori');
    }    
}
