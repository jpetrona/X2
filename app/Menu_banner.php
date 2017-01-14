<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_banner extends Model
{
	protected $table="menu_banner";

    public $timestamps = false;

    public function offers(){
    	return $this->hasMany(App\Offers::class,'menu_id');
    }
}
