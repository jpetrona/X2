<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table="invoice";

    public function users(){
    	return $this->belongsTo(App\Users::class,'user_id');
    }
}
