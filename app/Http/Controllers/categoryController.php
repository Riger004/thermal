<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class categoryController extends Controller
{
    //
    public function show($category){

    	$meta_data=DB::table('gigs')->where('sub_category',$category)->first();


    	$data=DB::table('gigs')
    			->join('users','gigs.user_id', '=', 'users.id')
    			->select('users.name','users.email','gigs.*')
    			->where('gigs.sub_category',$category)->get();

    	return view('prac.catagory-landing',compact('data','meta_data'));


    }
}
