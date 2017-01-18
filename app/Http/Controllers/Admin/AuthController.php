<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AuthController extends Controller
{
    public function getLogin() {
        if(Auth::guard('admin')->check())
            return redirect()->route('admin.home');
        else
    	   return view('admin.login');
    }

    public function postLogin(Request $request) {
    	$this->validate($request,[
            'txtusername'=>'required|min:5|max:32',
            'txtpassword'=>'required|max:32'
            ]);

        if(Auth::guard('admin')->attempt(['username'=>$request->txtusername,'password'=>$request->txtpassword])){
            return redirect()->route('admin.home');
        }else{
            return view('admin.login',['flash'=>'Username or Password incorrect!']);
        }
    }

   
}
