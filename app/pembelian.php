<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    //
    public function barang(){
			return $this->belongsTo('App\barang');
	}
	public function pemsasok(){
			return $this->belongsTo('App\pemsasok');
	}
}
