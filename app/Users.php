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
        return $this->hasMany(App\Clicks::class,'aff_sub_rand');
    }
    public function leads(){
        return $this->hasMany(App\Leads::class,'aff_sub_rand');
    }
    public function bookmarks(){
        return $this->hasMany(App\Bookmarks::class,'aff_sub_rand');
    }
    public function usersTemp(){
        return $this->hasMany(App\UsersTemp::class,'aff_sub_rand');
    }
}
