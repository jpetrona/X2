<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use Auth;
class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Users::all();
        return view('admin.member.index',['active'=>'member','users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member.create',['active'=>'member']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fullname'=>'required',
            'username'=>'required|unique:users,username',
            'email'=>'required|email|unique:users,email',
            'password'=>'required',
            ]);
        $user=new Users;
        $user->fullname=$request->fullname;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->aff_sub_rand=str_random(10);
        $user->groupname='TIGER';
        $user->ip=$_SERVER['REMOTE_ADDR'];
        $user->country="Vietnam";
        $user->user_agent="Admin create user";
        $user->active=1;
        $user->status=1;
        $user->save();
        return redirect()->route('admin.members.index')->with(['active'=>'member','status'=>'Bạn đã thêm thành công user '.$request->username,'class'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Users::findOrFail($id);
        return view('admin.member.edit',['active'=>'member','user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'fullname'=>'required',
            'username'=>'required',
            'email'=>'required|email'
            ]);
        $user= Users::findOrFail($id);
        $user->fullname=$request->fullname;
        $user->username=$request->username;
        $user->email=$request->email;
        if($request->password!=null)
        $user->password=bcrypt($request->password); 
        $user->save();
        return redirect()->route('admin.members.index')->with(['active'=>'member','status'=>'Bạn đã sửa thành công user '.$request->username,'class'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Users::destroy($id);
        return redirect()->route('admin.members.index')->with(['active'=>'member','status'=>'Bạn đã xóa thành công user '.$request->username,'class'=>'danger']);
    }
    public function login($id)
    {
        Auth::guard('user')->logout();
        Auth::guard('user')->loginUsingId($id);
        return redirect()->route('user.account');
    }
}
