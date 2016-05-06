<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mailers\AppMailer;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request, AppMailer $mailer)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        //Auth::login($this->create($request->all()));
        $user=$this->create($request->all());

        $mailer->sendEmailConfimationTo($user);

        session()->flash('message','please confirm your mail address');

        //return redirect($this->redirectPath());
        return redirect()->back(); 
    }
}
