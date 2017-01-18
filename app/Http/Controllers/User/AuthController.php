<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GeoIp2\Database\Reader;
use App\Users;
use Auth;
class AuthController extends Controller
{
    public function getLogin(){
        return view('member.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,[
            'txtusername'=>'required',
            'txtpassword'=>'required'
            ]);
        if(Auth::guard('user')->attempt(['username'=>$request->txtusername,'password'=>$request->txtpassword])){
            return redirect('1');
        }else{
            return redirect()->route('user.login')->with(['flash'=>'Username Or Password incorrect']);
        }
    }
    public function getRegister() {
    	return view('member.register');
    }

    public function postRegister(Request $request) {
    	$this->validate($request,[
    		'txtfullname'=>'required',
            'txtusername'=>'required|min:5|max:32',
    		'txtpassword'=>'required|min:3|max:32',
    		'txtemail'=>'required|email'
    		]);
        $reader = new Reader('public/GeoLite2/GeoIP2-City.mmdb');
        $record = $reader->city($_SERVER['REMOTE_ADDR']);
    	$user= new Users;
        $user->fullname=$request->txtfullname;
        $user->username=$request->txtusername;
        $user->password=bcrypt($request->txtpassword);
        $user->email=$request->txtemail;
        $user->aff_sub_rand=str_random(10);
        $user->ip=$_SERVER['REMOTE_ADDR'];
        $user->country=$record->country->name;
    	$user->user_agent=$_SERVER ['HTTP_USER_AGENT'];
        if ($user->save()) {
            return redirect()->route('user.login');
        } else {
    	   return view('member.register');
        }
    }
}
