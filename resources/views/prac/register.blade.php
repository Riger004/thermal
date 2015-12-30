@extends('prac.master')


@section('title', 'Registration')



@section('body')


 <div class="row">
    <div class="small-8 columns small-centered text-center">
      <div class="signup-panel">
        <p class="welcome"> Welcome to FiverrLike!</p>
        <form method="POST" action="auth/register" enctype="multipart/form-data">
           {{ csrf_field() }}
          <div class="row collapse">
            <div class="small-2  columns">
              <span class="prefix"><i class="fi-torso-female"></i></span>
            </div>
            <div class="small-10  columns">
              <input type="text" name="name" value="{{ old('name') }}" placeholder="name">
            </div>
          </div>
          <div class="row collapse">
            <div class="small-2 columns">
              <span class="prefix"><i class="fi-mail"></i></span>
            </div>
            <div class="small-10  columns">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="email">
            </div>
          </div>
          <div class="row collapse">
            <div class="small-2 columns ">
              <span class="prefix"><i class="fi-lock"></i></span>
            </div>
            <div class="small-10 columns ">
              <input input type="password" name="password" placeholder="password">
            </div>
             <div class="small-2 columns ">
              <span class="prefix"><i class="fi-lock"></i></span>
            </div>
            <div class="small-10 columns ">
              <input type="password" name="password_confirmation" placeholder="Confirm password">
            </div>
          </div>
           <button type="submit">Register</button>
        </form>
    
         <p>Already have an account? <a href="#"  data-reveal-id="myModal">Login here &raquo</a></p>
      </div>
    </div>
   </div>



@stop

