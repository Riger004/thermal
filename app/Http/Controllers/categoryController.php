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

    	$data=DB::table('gigs')->where('sub_category',$category)->get();

    	$meta_data=DB::table('gigs')->where('sub_category',$category)->first();


    	return view('prac.catagory-landing',compact('data','meta_data'));

    	//return $data;
    	

    }
}
