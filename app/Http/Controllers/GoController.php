<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Offers;
use App\Leads;
use App\UsersTemp;
use Auth;
class GoController extends Controller
{
    public function index($aff_sub_rand, $rand_id)
    {
    	if(!Auth::guard('user')->check()){
    		$user=Users::where('aff_sub_rand','=',$aff_sub_rand)
    					->where('active',1)
    					->where('status',1)  					
    					->get()
    					->first();
    		if(count($user)>0){
    			$offer= Offers::where('rand_id','=',$rand_id)
    							->where('status','=',1)   							
    							->get()
    							->first();
    			if(count($offer)>0){
    				$numberLead=Leads::where('offer_id',$offer->id)
    								  ->whereBetween('created_at',array(date('Y-m-d'),date('Y-m-d')))
    								  ->count();
    				$numberLead=intVal($numberLead);
    				if($offer->dailycap<$numberLead){  					
    					// session()->forget('user_id');
    					$checkIp=UsersTemp::where('user_id',$user->id)
    										->where('ip',$_SERVER['REMOTE_ADDR'])
    										->get()
    										->first();
    					if(!session('user_id')){
    						if(count($checkIp)>0){
    							$user_id=$checkIp->user_code;
    						}
    						else{
    						$user_id=str_random(30);   											
    						$usersTemp= new UsersTemp;
    						$usersTemp->user_id=$user->id;
    						$usersTemp->user_code=$user_id;
    						$usersTemp->ip=$_SERVER['REMOTE_ADDR'];
    						$usersTemp->user_agent=$_SERVER['HTTP_USER_AGENT'];
    						$usersTemp->save();   						    						
    						}
    					session(['user_id'=>$user_id]);	 
    					}
    					else{
    						return $offer->tracking.session('user_id');
    					}
    					
    				}
    				else{
    					return "Limited Dailycap";
    				}
    			}
    			else{
    				//Nothing
    			}
    		}
    		else{
    			//Nothing
    		}

    	}
    	// return $aff_sub_rand.$rand_id;
    }
}
