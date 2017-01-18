<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu_banner;
class MenuBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus= Menu_banner::all();
        return view('admin.menu.index',['active'=>'menu','menus'=>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create',['active'=>'menu']);
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
                                'icon'=>'required',
                                'name'=>'required']);
        $menu= new Menu_banner;
        $menu->icon=$request->icon;
        $menu->name=$request->name;
        $menu->status=1;
        $menu->save();
        return redirect('admin/menu')->with(['active'=>'menu','status'=>'Bạn đã thêm thành công Menu '.$request->name,'class'=>'success']);

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
        $menu= Menu_banner::where('id',$id)->first();
        return view('admin.menu.edit',['active'=>'menu','menu'=>$menu]);
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
        $menu= Menu_banner::where('id',$id)->first();
        $menu->icon=$request->icon;
        $menu->name=$request->name;
        $menu->save();   
        return redirect('admin/menu')->with(['active'=>'menu','status'=>'Bạn đã sửa menu thành công.','class'=>'success']);      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Menu_banner::destroy($id);
        return redirect('admin/menu')->with(['active'=>'menu','status'=>'Bạn đã thêm xóa thành công menu '.$request->name,'class'=>'danger']);
    }
}
