<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
   protected $table = 'fasilitas';
   protected $fillable = [
   'nama_fasilitas',
    'isi',
    'foto'
    ];

   public function kamar()
   {
   		return $this->belongToMany('App\Fasilitas', 'fasilitas_hotel', 'id_fasilitas', 'id_kamar');
   }
}
