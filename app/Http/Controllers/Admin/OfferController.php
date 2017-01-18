<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Offers;
class OfferController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($menuId){
  
    	if(\App\Menu_banner::findOrFail($menuId)){
    		$offers=Offers::where('menu_id',$menuId)->get();
			return view('admin.Offer.index',['active'=>'offer','subOffer'=>$menuId,'offers'=>$offers]);	
		}   		
    }
 	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($menuId)
    {
    	$network=\App\Network::all();
        return view('admin.Offer.create',['active'=>'offer','subOffer'=>$menuId,'network'=>$network]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $menuId)
    {
    	$this->validate($request,[
			'offername' =>'required',
			'offerid'   =>'required',
			'tracking'  =>'required',
			'payout'  =>'required|numeric',
			'rate'  =>'numeric',
			'country'   =>'required',
			'network'   =>'required',
			'dailycap'  =>'required|numeric' 		
    		]);
    	$country=null;
    	foreach($request->country as $c){
    		$country.=",".$c;
    	}
    	// $country=substr($country,0,-1);
    	$network=\App\Network::findOrFail($menuId)->first();
    	if($request->rate){
    		$rate=$request->rate;
    		$point=ceil($request->rate*$request->payout);
    	}else{
    		$rate=$network->rate;
    		$point=ceil($network->rate*$request->payout);   		
    	}
		$offer             = new Offers;
		$offer->off_id     =$request->offerid;
		$offer->off_name   =$request->offername;
		$offer->point      =$point;
		$offer->network_id =$request->network;
		$offer->payout     =$request->payout;
		$offer->dailycap   =$request->dailycap;
		$offer->country    =$country;
		$offer->img_link   =$request->image;
		$offer->tracking   =$request->tracking.$network->aff_sub;
		$offer->des        =$request->description;
		$offer->menu_id    =$menuId;
		$offer->rand_id    =str_random(10);
		$offer->rate       =$rate;
		$offer->save();
        return redirect()->route('admin.offer.index',$menuId)->with(['active'=>'offer','subOffer'=>$menuId,'status'=>'Bạn đã thêm thành công offer '.$request->offername,'class'=>'success']);
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
    public function edit($menuId, $id)
    {
        $offer=Offers::findOrFail($id);
        return view('admin.offer.edit')->with(['active'=>'offer','offer'=>$offer,'subOffer'=>$menuId]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $menuId, $id)
    {
        $this->validate($request,[
			'offername' =>'required',
			'offerid'   =>'required',
			'tracking'  =>'required',
			'point'  =>'required|numeric',
			'country'   =>'required',
			'network'   =>'required',
			'dailycap'  =>'required|numeric' 		
    		]);
        $country=null;
    	foreach($request->country as $c){
    		$country.=",".$c;
    	}
    	// $country=substr($country,0,1);
        $offer= Offers::findOrFail($id);
        $offer->off_id=$request->offerid;
        $offer->off_name=$request->offername;
        $offer->network_id=$request->network;
        $offer->dailycap=$request->dailycap;
        $offer->country=$country;
        $offer->img_link=$request->image;
        $offer->tracking=$request->tracking;
        $offer->des=$request->description;
        $offer->save();
        return redirect()->route('admin.offer.index',$menuId)->with(['active'=>'offer','subOffer'=>$menuId,'status'=>'Bạn đã sửa thành công offer '.$request->offername,'class'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $menuId, $id)
    {
        Offers::destroy($id);
        return redirect()->route('admin.offer.index',$menuId)->with(['active'=>'offer','subOffer'=>$menuId,'status'=>'Bạn đã xóa thành công offer '.$request->offername,'class'=>'danger']);
    }
}
