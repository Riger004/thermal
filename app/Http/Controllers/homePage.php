<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gig;
use Crypt;
use DB;
use App\User;
use App\profiles;
class homePage extends Controller
{
    // displaying the gigs on the home page 


	public function display_gigs(){
		$gigs=DB::table('gigs')->join('users','users.id','=','gigs.user_id')->
		select('users.name','gigs.title','gigs.gig_photo','gigs.amount','gigs.id')->
		orderBy('gigs.created_at','desc')->take(8)->get();
		if($gigs!==null){
		return view('prac.home',compact('gigs'));
		}else{
			return view('prac.home');
		}
	}


	//displaying a specific gig which has been clicked by the user
	public function show_gig($id){

		//
        $dycrypt=Crypt::decrypt($id);
        //$profile=profiles::where('id',$user->id)->first();

        $gig_user=Gig::where('id',$dycrypt)->first();

        $profile=profiles::where('user_id',$gig_user->user_id)->first();

        $user=User::where('id',$gig_user->user_id)->first();

        return view('prac.gigg',compact('gig_user','user','profile'));	

	}




}
