<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datawisata extends Model
{
    protected $table = 'datawisata';
    protected $primaryKey = 'id_wisata';
	public $timestamps = true;
	protected $fillable = [
        'namawisata','judultagline', 'deskripsitagline', 'judul1', 'deskripsijudul1', 'judul2', 'deskripsijudul2','fotowisata', 'urlvidio', 'urlmap', 'daerah'
    ];

    public function datahotels(){
        return $this->hasMany('App\datahotel', 'id_wisata');
    }
}