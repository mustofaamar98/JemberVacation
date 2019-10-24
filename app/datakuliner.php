<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datakuliner extends Model
{
    protected $table = 'datakuliner';
    protected $primaryKey = 'id_kuliner';
	public $timestamps = true;
	protected $fillable = [
        'namakuliner','deskripsikuliner', 'hargakuliner','fotokuliner','daerah'
    ];
}