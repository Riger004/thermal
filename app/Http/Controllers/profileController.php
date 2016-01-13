<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\profiles;
use App\Gig;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        //
        $user=Auth::user();
        $profile=profiles::where('user_id',$user->id)->first();
        $gig=Gig::where('user_id',$user->id)->get();


        if($profile===null){
            return view('prac.profile',compact('user'));
        }else{
            return view('prac.profile',compact('user','profile','gig'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::user();

        $this->validate($request, [
            'country' => 'string|max:50',
            'language' => 'string|max:50',
            'phone_num' => 'numeric',
            'profile_pic' => 'max:3000|mimes:jpeg,bmp,png,jgp',
            'about' => 'max:500',
            'short_info' => 'max:255',
            ]);

        $file_name="";
        if($request->file('profile_pic')!==null){
            $file=$request->file('profile_pic');

            $file_name=time().$file->getClientOriginalName();

            $file->move('fivver/photos',$file_name);
        }

        $profile=profiles::where('user_id',$user->id)->first();

        if($profile===null){
            $user->profiles()->create([
                'country'=>$request->country,
                'language'=>$request->language,
                'phone_num'=>$request->phone_num,
                'profile_pic'=>"/fivver/photos/{$file_name}",
                'about'=>$request->about,
                'short_info'=>$request->short_info,
                ]);
        }else{
            if($request->country){
                $user->profiles()->update([
                    'country'=>$request->country,
                    ]);
            }
            if($request->language){
                $user->profiles()->update([
                    'language'=>$request->language,
                    ]);
            }
            if($request->phone_num){
                $user->profiles()->update([
                    'phone_num'=>$request->phone_num,
                    ]);
            }
            
            if($request->file('profile_pic')){
                $user->profiles()->update([
                    'profile_pic'=>"/fivver/photos/{$file_name}",
                    ]);
            }
            if($request->about){
                $user->profiles()->update([
                    'update'=>$request->about,
                    ]);
            }

            if($request->short_info){
                $user->profiles()->update([
                    'short_info'=>$request->short_info,
                    ]);
            }
            

        }
        return redirect()->back() ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        
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

    



























}
