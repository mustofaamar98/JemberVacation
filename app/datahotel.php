<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datahotel extends Model
{
    protected $table = 'datahotel';
    protected $primaryKey = 'id_hotel';
	public $timestamps = true;
	protected $fillable = [
        'namahotel','alamathotel', 'deskripsihotel', 'daerah','id_wisata','harga', 'fotohotel','lat','lng'
    ];

    public function datawisata(){
        return $this->belongsTo('App\datawisata','id_wisata');
    }
    
}
