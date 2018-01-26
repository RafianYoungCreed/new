<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    //
    public function barang(){
			return $this->belongsTo('App\barang');
	}
}
