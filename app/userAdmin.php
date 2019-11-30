<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userAdmin extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = [
        'name','email', 'password','fotoprofil'
    ];

}
