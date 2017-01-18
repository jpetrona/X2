<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class HomeController extends Controller
{
    public function index(){
    	if(Auth::guard('admin')->check()){
    		return view('admin.index',['active'=>'home']);
    	}
    	else{
    		return redirect()->route('admin.login');
    	}
    }
}
