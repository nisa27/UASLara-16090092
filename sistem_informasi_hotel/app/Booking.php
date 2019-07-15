<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = [
    'kode_booking',
    'id_kamar',
    'nama',
    'no_hp',
    'alamat',
    'check_in',
    'check_out',
    'status',
    'deleted',
    ];
    

    public function kamar(){
        return $this->belongsTo('App\Kamar', 'id_kamar');
    }
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
