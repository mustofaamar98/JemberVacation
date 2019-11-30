<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datadistrict extends Model
{
    protected $table = 'district';
    protected $primaryKey = 'id_district';
	public $timestamps = false;
    protected $fillable = ['nama_district'];
    public function datadaerah(){
        return $this->hasMany('App\datadaerah', 'id_district');
    }
}
