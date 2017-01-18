<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Network;
class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $networks= Network::all();
        return view('admin.network.index',['active'=>'network','networks'=>$networks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.network.create',['active'=>'network']);
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
            'networkname'=>'required',
            'networkid'=>'required|unique:network,networkid',
            'api'=>'required',
            'aff_sub'=>'required',
            'postback'=>'required',
            'platform'=>'required',
            'rate'=>'required|numeric',
            ]);
        $network = new Network;
        $network->networkname=$request->networkname;
        $network->networkid=$request->networkid;
        $network->api=$request->api;
        $network->rate=$request->rate;
        $network->aff_sub=$request->aff_sub;
        $network->platform=$request->platform;
        $network->postback=$request->postback;
        $network->status=1;
        $network->save();
        return redirect('admin/network')->with(['active'=>'network','status'=>'Bạn đã thêm thành công Network','class'=>'success']);
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
        $network= Network::findOrFail($id);
        return view('admin.network.edit',['active'=>'network','network'=>$network]);
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
            'networkname'=>'required',
            'networkid'=>'required',
            'api'=>'required',
            'aff_sub'=>'required',
            'postback'=>'required',
            'platform'=>'required',
            'rate'=>'required|numeric',
            ]);
        $network=Network::findOrFail($id);
        $network->networkname=$request->networkname;
        $network->networkid=$request->networkid;
        $network->api=$request->api;
        $network->rate=$request->rate;
        $network->aff_sub=$request->aff_sub;
        $network->platform=$request->platform;
        $network->postback=$request->postback;
        $network->save();
        return redirect('admin/network')->with(['active'=>'network','status'=>'Bạn đã sửa thành công Network','class'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Network::destroy($id);
        return redirect('admin/network')->with(['active'=>'network','status'=>'Bạn đã xóa thành công '.$request->networkname,'class'=>'danger']);
    }
}
