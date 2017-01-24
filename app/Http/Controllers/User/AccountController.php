<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AccountController extends Controller
{
    public function account(){
    	return Auth::guard('user')->user()->username;
    }
}
