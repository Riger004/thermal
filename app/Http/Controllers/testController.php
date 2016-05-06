<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use App\Profiles;


class testController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     if (Auth::check()) {
    // The user is logged in...
        //$user = Auth::user();
        return view('prac.hhh');
    }else{
        return 'the user is not verified';
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            $user=Auth::user();
            return view('prac.profile',compact('user'));
            //return Auth::user();

        }else{
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\profileRequest $request)
    {
        //
        if(Auth::check()){

            $user=Auth::user();

            $user->profiles()->create($request->all());

            //profiles::create(["user_id"=>"$user->id"],$request->all());

            return 'done';

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        if(Auth::check()){
            $user=Auth::user();

            $data=Profiles::where(compact('user_id'))->first();

            return view('show.profile',compact('data','user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function confirmEmail($token){

        $user=User::whereToken($token)->firstOrFail();

        $user->verified=true;
        $user->token=null;
        $user->save();

        return $redirect = '/';
    }
}
