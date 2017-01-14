<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    protected $table="network";

    public function offers(){
    	return $this->hasMany(App\Offers::class,'network_id');
    }
}
