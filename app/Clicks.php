<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clicks extends Model
{
    protected $table="clicks";

    public function users(){
    	return $this->belongsTo(App\Users::class,'user_id');
    }
    public function offers(){
    	return $this->belongsTo(App\Offers::class,'offer_id');
    }
}
