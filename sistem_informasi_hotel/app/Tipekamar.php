<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipekamar extends Model
{
    protected $table = 'tipe_kamar';

    protected $fillable = [
    'tipe_kamar'
    ];

    public function kamar(){
    	return $this->hasMany('App\Kamar', 'id_tipekamar');
    }
}
