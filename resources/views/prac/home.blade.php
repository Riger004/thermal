  @extends('prac.Demomaster')


  @section('title', 'Home')



  @section('body')




  <!-- slider starts -->

  <div id="owl-demo" class="owl-carousel owl-theme ">


    <div class="item"><img src="img/hero1.jpg" class="dde" alt="Mirror Edge"></div>
    <div class="item"><img src="img/hero2.jpg" alt="Mirror Edge"></div>
    <div class="item"><img src="img/hero3.jpg" alt="Mirror Edge"></div>
    <div class="item"><img src="img/hero4.jpg" alt="Mirror Edge"></div>
    <div class="item"><img src="img/hero5.jpg" alt="Mirror Edge"></div>
    <div class="item"><img src="img/hero6.jpg" alt="Mirror Edge"></div>


  </div>



  <div class="row homeHero">

    <div  class="small-12 columns small-centered text-center heroText " >

      <span class="ProName"><b>What do you need done?</b><hr> <span class="brand"><b>Find it on <span style="color:#22BB5B">Fiverr</span></b></span></span> <br>

      <span class="ProRate"><span class=" browse">Browse</span><span   class="buy">&nbsp;Buy&nbsp;</span><span class="done">Done</span> </span> 


    </div>
  </div>


  <!-- slider ends -->



  <div class="row  mainContent panel ">


    <!-- gigg display-->
    <div class="large-12 columns ">



      <div class="row tredPad padpad">
        <div class="small-12 columns small-centered text-center">
          <h3><b>Most Recent Services</b></h3>
          <h6><b>Choose from our most recent services</b></h6>
        </div>


      </div>

      <hr>



  <!-- four gigg ends -->


  

  <div class="row  " data-equalizer>

  @if(isset($gigs))  

  @foreach($gigs as $gig)
  <a href="/gig_create/<?php echo Crypt::encrypt($gig->id)?>">
    <!-- working with this section nwo-->

    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="{{$gig->gig_photo}}">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>{{$gig->title}}</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by {{$gig->name}} <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">tk {{$gig->amount}}</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>
  @endforeach
  @endif

  </div>


  <!-- four gigg ends -->

  <div class="column row  text-center viewMore">

    <a class="large button success  hollow" href="#">View More</a>

  </div>


  </div>


  <!-- featured giggs -->


  <div class="large-12 columns ">



    <div class="row tredPad padpad">
      <div class="small-12 columns small-centered text-center">
        <h3><b>Most Popular Services</b></h3>
        <h6><b>Choose from our most popular services</b></h6>
      </div>


    </div>

    <hr>



    <!-- four gigg starts -->

    <div class="row  " data-equalizer>

      <a href="gigg">


        <div class="medium-3 small-6 columns  gigg service" >
         <div class="bord">
          <div class="item service-icon-box">
            <img src="img/lgB.jpg">

          </div>

          <div class="service-heading" data-equalizer-watch>

            <div class=" column row"> <h6>I will test android, iPhone application or game</h6></div>

            <div class=" column row">


              <span class="float-left">
               <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
             </span>


             <span class="float-right">
               <h5 class="subheader text-right">$5</h5>
             </span>

           </div>
         </div>
       </div>
     </div>

   </a>


   <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/lgC.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android, l test android l test android iPhone application or game</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">$5</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>


  <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/lgB.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android,  or game</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">$5</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>


  <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/profile.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android, iPhone game</h6></div>

        <div class="row">


          <div class="small-6 columns">
           <h6 class="subheader "><small>by Mr. SomeOne</small></h6>
         </div>


         <div class="small-6 columns">
           <h6 class="subheader text-right">$5</h6>
         </div>

       </div>
     </div>
   </div>
  </div>

  </a>


  </div>


  <!-- four gigg ends -->


  <!-- four gigg starts -->

  <div class="row  " data-equalizer>

    <a href="gigg">


      <div class="medium-3 small-6 columns  gigg service" >
       <div class="bord">
        <div class="item service-icon-box">
          <img src="img/mdA.jpg">

        </div>

        <div class="service-heading" data-equalizer-watch>

          <div class=" column row"> <h6>I will test android, iPhone application or game</h6></div>

          <div class=" column row">


            <span class="float-left">
             <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
           </span>


           <span class="float-right">
             <h5 class="subheader text-right">$5</h5>
           </span>

         </div>
       </div>
     </div>
   </div>

  </a>

  <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/profile.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android, l test android l test android iPhone application or game</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">$5</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>


  <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/profile.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android,  or game</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">$5</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>


  <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/mdA.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android, iPhone game</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">$5</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>


  </div>


  <!-- four gigg ends -->


  <!-- four gigg starts -->

  <div class="row  " data-equalizer>

    <a href="gigg">


      <div class="medium-3 small-6 columns  gigg service" >
       <div class="bord">
        <div class="item service-icon-box">
          <img src="img/mdA.jpg">

        </div>

        <div class="service-heading" data-equalizer-watch>

          <div class=" column row"> <h6>I will test android, iPhone application or game</h6></div>

          <div class=" column row">


            <span class="float-left">
             <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
           </span>


           <span class="float-right">
             <h5 class="subheader text-right">$5</h5>
           </span>

         </div>
       </div>
     </div>
   </div>

  </a>




  <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/profile.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android, l test android l test android iPhone application or game</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">$5</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>


  <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/profile.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android,  or game</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">$5</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>


  <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/mdA.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android, iPhone game</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">$5</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>


  </div>


  <!-- four gigg ends -->



  <!-- four gigg starts -->

  <div class="row  " data-equalizer>

    <a href="gigg">


      <div class="medium-3 small-6 columns  gigg service" >
       <div class="bord">
        <div class="item service-icon-box">
          <img src="img/mdA.jpg">

        </div>

        <div class="service-heading" data-equalizer-watch>

          <div class=" column row"> <h6>I will test android, iPhone application or game</h6></div>

          <div class=" column row">


            <span class="float-left">
             <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
           </span>


           <span class="float-right">
             <h5 class="subheader text-right">$5</h5>
           </span>

         </div>
       </div>
     </div>
   </div>

  </a>




  <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/profile.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android, l test android l test android iPhone application or game</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">$5</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>


  <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/profile.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android,  or game</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">$5</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>


  <a href="gigg">


    <div class="medium-3 small-6 columns  gigg service" >
     <div class="bord">
      <div class="item service-icon-box">
        <img src="img/mdA.jpg">

      </div>

      <div class="service-heading" data-equalizer-watch>

        <div class=" column row"> <h6>I will test android, iPhone game</h6></div>

        <div class=" column row">


          <span class="float-left">
           <h6 class="subheader "><small>by Mr. SomeOne <br></small></h6>
         </span>


         <span class="float-right">
           <h5 class="subheader text-right">$5</h5>
         </span>

       </div>
     </div>
   </div>
  </div>

  </a>


  </div>


  <!-- four gigg ends -->

  <div class="column row  text-center viewMore padBottom">

    <a class="large button success  hollow" href="#">View More</a>

  </div>


  </div>


  </div>    <!--   main content end -->

  <!-- three section  -->
  <div class="column row text-center fuu">
    <h3></h3>
  </div>

  <div class="row features padBottom " data-equalizer data-equalize-by-row="true">
    <div class="medium-3 columns bord" data-equalizer-watch>
      <div class="round-icon">
        <span class="fi-like"></span>
      </div>
      <h3>GET THINGS DONE</h3>
      <hr>
      <p class="subheader">People who love what they do help you get everything done at an unbeatable value</p>
    </div>
    <div class="medium-4 medium-offset-1 columns bord" data-equalizer-watch>
      <div class="round-icon">
        <span class="fi-dollar"></span>
      </div>
      <h3>START SELLING</h3>
      <hr>
      <p class="subheader">What do you do best? Create your Gir and start selling.It's free , and only takes 5 minutes.</p>
    </div>
    <div class="medium-3 medium-offset-1 columns bord" data-equalizer-watch>
      <div class="round-icon">
        <span class="fi-crown"></span>
      </div>
      <h3>TRUST & SAFETY</h3>
      <hr>
      <p class="subheader">Your safety is our top priority.Secure transactions and our safety team protect you at all times.</p>
    </div>     
  </div>

  <!-- three end -->


  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
  <script >



  $(window).load(function() {
    var menuS = $('.panA').outerHeight();
    var menuL = $('.pan').outerHeight();
    var toop = menuL +menuS + 60;

   // var height = $('#owl-demo').height();
   var height = $(" .item > img ").innerHeight();
    // var height=document.getElementById('.item').naturalHeight;

    height=height+toop -50;
    $(".mainContent").css('top', height + "px");

  // footer fix
  var e=$('.mainContent').outerHeight();   


  $('.fuu').height(e +toop -90);

  });

  </script>

  @stop

