<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Crypt;
use App\User;
use App\Gig;
use App\profiles;
use App\carts;

class cartController extends Controller
{
    //
	public function __construct(){
		$this->middleware('auth');
	}

    //storing the data in the cart
	public function store($id,Request $request){

		$user=Auth::user();

		$dycrypt=Crypt::decrypt($id);

		//checking if this gig belongs to the same person who has requested the gig if yes 
		//the page will be redirected with a message that he cannot cart his own gig

		$gig=Gig::where('id',$dycrypt)->first();

		if($gig->user_id===$user->id){
			return redirect()->back()->with("message","you cannot hire your own gig");
		}else{
			$cart=new carts;

			$cart->user_id=$user->id;
			$cart->gig_id=$request['gig_id'];
			$cart->gig_quantity=$request['quantity'];
			$cart->save();
			return redirect()->back()->with("message","this item has been added in your cart");			
		}

		
		
	}

	public function display_cart( Request $request){

		$user=Auth::user();

		$carts=carts::where('user_id',$user->id)->get();

		$gigs=array();
		$quan_array=array();

		$quantity=0;
		$cart_total=0;
		$counter=0;
		foreach ($carts as $key) {
			$temp=Gig::where('id',$key->gig_id)->first();
			$quantity=$key->gig_quantity;
			$gigs[]=$temp;
			$quan_array[]=$quantity;
			$cart_total=($cart_total+$temp->amount)*$quantity;
			/*if($counter===1){
			return $cart_total." ".$quantity;
		}
		$counter++;*/
		}

		//have to fix the money calculation thing here

		return view('prac.shoppingCart',compact('gigs','cart_total','quan_array'));
		//return $cart_total;
	}


































}
