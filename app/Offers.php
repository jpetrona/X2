<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $table="offers";

    public function network(){
    	return $this->belongsTo(\App\Network::class,'network_id');
    }

}
