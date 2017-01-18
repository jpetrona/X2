<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Offerwall;
class OfferwallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offerWalls=Offerwall::all();
        return view('admin.Offerwall.index',['active'=>'offerwall','offerWalls'=>$offerWalls]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offerwall.create',['active'=>'offerwall']);
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
            'network'=>'required',
            'iframe'=>'required',
            'dailypoint'=>'required|numeric',
            'secretkey'=>'required',
            ]);
        $offerWall= new Offerwall;
        $offerWall->network=$request->network;
        $offerWall->iframe=$request->iframe;
        $offerWall->secretKey=$request->secretkey;
        $offerWall->dailypoint=$request->dailypoint;
        $offerWall->save();
        return redirect()->route('admin.offerwall.index')->with(['active'=>'offerwall','status'=>'Bạn đã thêm thành công '.$request->network,'class'=>'success']);
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
        $offerWall=Offerwall::findOrFail($id);
        return view('admin.offerwall.edit',['active'=>'offerwall','offerWall'=>$offerWall]);
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
            'network'=>'required',
            'iframe'=>'required',
            'dailypoint'=>'required|numeric',
            'secretkey'=>'required',
            ]);

        $offerWall=Offerwall::findOrFail($id);
        $offerWall->network=$request->network;
        $offerWall->iframe=$request->iframe;
        $offerWall->dailypoint=$request->dailypoint;
        $offerWall->secretKey=$request->secretkey;
        $offerWall->save();
        return redirect()->route('admin.offerwall.index')->with(['active'=>'offerwall','status'=>'Bạn đã sửa thành công '.$request->network,'class'=>'success']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Offerwall::destroy($id);
        return redirect()->route('admin.offerwall.index')->with(['active'=>'offerwall','status'=>'Bạn đã xóa thành công '.$request->network,'class'=>'danger']);
    }
}
