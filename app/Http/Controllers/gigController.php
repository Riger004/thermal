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

class gigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function __construct(){
        $this->middleware('auth');
    }*/

    public function index()
    {
        //
        return view('prac.gigg_creation');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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

        $this->validate($request,[

            'title'=>'string|max:80|required',
            'main_category'=>'required',
            'sub_category'=>'required',
            'gig_photo' => 'required|max:5000|mimes:jpeg,bmp,png,jgp',
            'description'=>'string|max:1200|required',
            'tag'=>'string|required',
            'amount'=>'numeric|required',
            'duration'=>'numeric|required',
            'quick_delivery'=>'numeric',
            'quick_amount'=>'numeric',
            'requirements'=>'string|max:1200|required',
            ]);


        $file=$request->file('gig_photo');

        $file_name=time().$file->getClientOriginalName();

        $file->move('fivver/gig_pics',$file_name);
        
        
        $user->gig_create()->create([

                'title'=>$request->title,
                'main_category'=>$request->main_category,
                'sub_category'=>$request->sub_category,
                'gig_photo'=>"/fivver/gig_pics/{$file_name}",
                'description'=>$request->description,
                'tag'=>$request->tag,
                'amount'=>$request->amount,
                'duration'=>$request->duration,
                'quick_delivery'=>$request->quick_delivery,
                'quick_amount'=>$request->quick_amount,
                'requirements'=>$request->requirements,
            ]);



        return redirect()->action('profileController@index');

        /*if($gig===null){
            return 'please create a gig first';
        }*/


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
        $dycrypt=Crypt::decrypt($id);
        //$profile=profiles::where('id',$user->id)->first();

        $gig_user=Gig::where('id',$dycrypt)->first();

        $profile=profiles::where('user_id',$gig_user->user_id)->first();

        $user=User::where('id',$gig_user->user_id)->first();

        return view('prac.gigg',compact('gig_user','user','profile'));

        
        
        //return $profile;


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
        $dycrypt=Crypt::decrypt($id);

        return "here in the gigController edit section";
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
