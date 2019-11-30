<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datadaerah extends Model
{
    protected $table = 'districts';
    protected $primaryKey = 'id_daerah';
	public $timestamps = false;
	protected $fillable = [
        'daerah','id_district'
    ];
    public function datadistrict(){
        return $this->belongsTo('App\datadistrict','id_district');
    }
    public function datawisata(){
        return $this->hasMany('App\datawisata', 'id_daerah');
    }
    
}
