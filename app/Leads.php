<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    protected $table="leads";

    public function users(){
    	return $this->belongsTo(App\Users::class,'user_id');
    }
    public function offers(){
    	return $this->belongsTo(App\Offers::class,'offer_id');
    }
}
