<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    //

	protected $fillable = ['id','namabarang','Merk','ukuran','harga','jumlah','type','rasa','jenbar_id'];
    protected $visible = ['id','namabarang','Merk','ukuran','harga','jumlah','type','rasa','jenbar_id'];
    public  $timestamps = true;
 	
 	public function Jenbar(){
			return $this->belongsTo('App\Jenbar');
	}
	
}
