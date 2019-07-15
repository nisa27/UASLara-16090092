<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';

    protected $fillable = [
    'no_kamar',
    'nama_kamar',
    'id_tipekamar',
    'harga',
    'keterangan',
    'foto',
    'deleted',
    ];

    public function tipekamar(){
        return $this->belongsTo('App\Tipekamar', 'id_tipekamar');
    }

    public function fasilitas()
    {
        return $this->belongsToMany('App\Fasilitas', 'fasilitas_hotel', 'id_kamar' ,'id_fasilitas')->withTimeStamps();
    }

    public function getFasilitasHotelAttribute()
    {
        return $this->fasilitas->pluck('id')->toArray();
    }
    public function scopeTipekamar($query, $id_tipekamar)
    {
        return $query->where('id_tipekamar', $id_tipekamar);
    }
}
