<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmarks extends Model
{
	protected $table="bookmarks";
	
    public function users(){
    	return $this->belongsTo(App\Users::class,'user_id');
    }
    public function offers(){
    	return $this->belongsTo(App\Offers::class,'offer_id');
    }
}
