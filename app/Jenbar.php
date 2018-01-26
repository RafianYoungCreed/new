<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenbar extends Model
{
    protected $fillable = ['namajenis'];
    protected $visible = ['namajenis'];
    public  $timestamps = true;
 	
 	public function barang(){
			return $this->hasMany('App\Barang');
	}
	
}
