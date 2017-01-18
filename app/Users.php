<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $table="users";

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function clicks() {
        return $this->hasMany(\App\Clicks::class,'user_id');
    }
    public function leads(){
        return $this->hasMany(\App\Leads::class,'user_id');
    }
    public function bookmarks(){
        return $this->hasMany(\App\Bookmarks::class,'user_id');
    }
    public function usersTemp(){
        return $this->hasMany(\App\UsersTemp::class,'user_id');
    }
}
