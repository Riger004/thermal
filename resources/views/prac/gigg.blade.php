@extends('prac.demoMaster')


@section('title', 'Gigg')



@section('body')

<!--code starts here-->


<div class="row padTop ">

  <!-- gigg show-->
  <div class="large-8 columns  showGig panel">
    <div class=" column row">

      <p class="text-left">
        <h4><b><span class="p1">{{$gig_user->title}}</span></b></h4>

      </p>

    </div>

    <div class="column row ">

      <span class="float-left subheader"><small>{{$gig_user->main_category}} / {{$gig_user->sub_category}} </small></span>
      <span class="float-right subheader fi-clock"><small>{{$gig_user->duration}} days on avegrage</small></span>

    </div>
    <div class="column row"> 


      <div id="owl-gigg" class="owl-carousel owl-theme">

        <div class="flex-video widescreen item">
         <img width="560" height="315" src="{{$gig_user->gig_photo}}" frameborder="0" allowfullscreen>
       </div>


     </div>

   </div>



   <div class=" column row ">

    <p class="">
      <h4><b><span class="p1">About This Gig</span></b></h4>

    </p>


    <p class="text-justify">

      {{$gig_user->description}}

    </p>

    <h4 class="text-justify">
      Requirements: <br>

    </h4>

    <P class="text-justify">
      {{$gig_user->requirements}}
    </P> 

    @if($gig_user->main_category=='Programming_and_Tech')
    <h5> Programming language</h5>
    <P>{{$gig_user->tag}}</P>
    @endif


  </div>


  <!-- shown only for own giggs -->
  @if(Auth::user()->id==$user->id)
  <div class="column row  text-center viewMore">

    <a class="large button subheader  hollow" href="#">Edit Gigg</a>

  </div>
  @endif








</div>



<!-- extras -->





<!-- order & seller -->
<div class="small-4 columns show-for-large ">

  <div class="border ">


    <div class=" row  ">

      <div class="">
        <div class="small-8 columns ">
         <a href="#" class=" button expanded large success hollow" style="margin-right:5px">Order Now tk: {{$gig_user->amount}}   </a>
       </div>
       <div class="small-4 columns ">
        <a href="#" class=" button expanded large success  hollow"> <i class="fi-shopping-cart"></i></a>
      </div>
    </div>    



  </div>   

  <div class=" row">
    <div class="small-6 columns">
      <span class=" subheader float-left">Basic Gig Quantity</span>
    </div>


    <div class="small-6 columns float-right">
     <select>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>

  </div>

</div>

</div>




<!-- rating -->


<div class="border ">



  @if($gig_user->rating!=null)
  <div class=" row">
    <div class="small-8 columns">
      <span class="  subheader float-left">5585 Buyer Reviews</span>
    </div>
    <div class="small-4 columns">
     <span class=" small-6 columns subheader  stat">4.9</span>
   </div>



 </div>
 @endif


 <hr>

 <div class=" row">
  <div class="small-8 columns">
    <span class="  subheader float-left">Oredr In Queue</span>
  </div>
  <div class="small-4 columns">
   <span class=" small-6 columns subheader  stat">9</span>
 </div>



</div>



</div>

<!-- social -->

<div class="border">
  <div class="row">
    <div class="small-12  columns">
      <p class="about text-center subheader">Share this gig with others </p>
      <ul class="inline-list gigg-social ">
        <a href="#"><i class="fi-social-facebook" ></i></a>
        <a href="#"><i class="fi-social-twitter"></i></a>
        <a href="#"><i class="fi-social-linkedin"></i></a>
        <a href="#"><i class="fi-social-github"></i></a>
      </ul>
    </div>


  </div>

</div>



<!-- gigg owner -->

<div class="border">
  <div class="row">
    <div class="small-12  columns  ">
      @if(isset($profile->profile_pic))
     <a href=""><img src="{{$profile->profile_pic}}" class="float-center center gigg-pro-img"></a> 
     @endif
   </div>


   <div class="small-12  columns text-center  p1">
     <h6>{{$user->name}}</h6>

   </div>


   <div class="small-12  columns  p1">
    <hr>
    <div class="row padTop">
     <div class="small-6 columns ">
      <span class="subheader">From<br></span> 
      @if(isset($profile->country))
      <span class=" subheader">{{$profile->country}}</span> 
      @endif
    </div>
    <div class="small-6 columns ">
      <span class="subheader">Positive Rating<br></span> 
      <span class=" subheader">99%</span>
    </div>
  </div>

  <div class="row padTop">
   <div class="small-6 columns ">
    <span class="subheader">Speaks<br></span> 
    @if(isset($profile->language))
    <span class=" subheader">{{$profile->language}}</span> 
    @endif
  </div>
  <div class="small-6 columns padBottom ">
    <span class="subheader">Avg. Response Time<br></span> 
    <span class=" subheader">7 Hrs.</span>
  </div>
  <hr>
</div>


<div class="column row subheader padBottom padTop">
  @if(isset($profile->about))
 <h6>{{$profile->about}}</h6>
 @endif
</div>

<div class="column row">

 
 <a href="" class="button hollow success float-right">Contact Me</a>
</div>

</div>


</div>

</div>




</div>


<!-- extras -->
<div class="large-8 columns  showGig panel flearfix float-left ">

  <p class="">
    <h4><b><span class="p1">Check Out My Extras</span></b></h4>

  </p>


  <form>
    <div class="row">
      <div class="small-6 columns">
        <label  class="float-left checkText">Basic Gig Quantity</label>
      </div>
      <div class="small-4 columns float-right">
       <select>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </div>
  </div>


  <div class=" row">




   <div class="small-8 columns ">
     <input id="extraFast" type="checkbox"><label for="checkbox12"><span class="checkText">Extra Fast Delivery at 2 Days For extra 250tk</span></label>
   </div>
   <div class="small-4 columns">


     <select>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>


  </div>

</div>
<div class=" row">


 <div class="small-8 columns ">
   <input id="extraFast" type="checkbox"><label for="checkbox12"><span class="checkText">I will do web design for extra 5 dolloar</span></label>
 </div>
 <div class="small-4 columns">


   <select>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>


</div>

</div>


<div class=" row">


 <div class="small-8 columns ">
   <input id="extraFast" type="checkbox"><label for="checkbox12"><span class="checkText">I will do web design for extra 5 dolloar</span></label>
 </div>
 <div class="small-4 columns">


   <select>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>


</div>

</div>


<!-- order button -->
<div class="row">



  <div class="">
    <div class="small-8 columns ">
     <a href="#" class=" button expanded large success hollow" >Order Now ( $5 )  </a>
   </div>
   <div class="small-4 columns ">
    <a href="#" class=" button expanded large success hollow "> <i class="fi-shopping-cart"></i></a>
  </div>

</div>  

</div>

</form>
</div>


<!-- extras end -->



<!-- for small devices -->

<div class="small-12 columns hide-for-large ">

  <div class="border ">




    <div class=" row">
      <div class="small-8 columns">
        <span class="  subheader float-left">5585 Buyer Reviews</span>
      </div>
      <div class="small-4 columns">
       <span class=" small-6 columns subheader  stat">4.9</span>
     </div>



   </div>



   <hr>

   <div class=" row">
    <div class="small-8 columns">
      <span class="  subheader float-left">Oredr In Queue</span>
    </div>
    <div class="small-4 columns">
     <span class=" small-6 columns subheader  stat">9</span>
   </div>



 </div>



</div>

<!-- social -->

<div class="border marginBottom ">
  <div class="row">
    <div class="small-12  columns ">
      <p class="about text-center subheader">Share this gig with others </p>
      <ul class="inline-list gigg-social ">
        <a href="#"><i class="fi-social-facebook" ></i></a>
        <a href="#"><i class="fi-social-twitter"></i></a>
        <a href="#"><i class="fi-social-linkedin"></i></a>
        <a href="#"><i class="fi-social-github"></i></a>
      </ul>
    </div>


  </div>

</div>


<!-- about gigg owner -->


<div class="border">
  <div class="row">
    <div class="small-12  columns  ">
     <a href=""><img src="img/profile.jpg" class="float-center center gigg-pro-img"></a> 
   </div>


   <div class="small-12  columns text-center  p1">
     <h6>Mr. NameOf Person</h6>

   </div>


   <div class="small-12  columns  p1">
    <hr>
    <div class="row padTop">
     <div class="small-6 columns ">
      <span class="subheader">From<br></span> 
      <span class=" subheader">Papua new guinea</span> 
    </div>
    <div class="small-6 columns ">
      <span class="subheader">Positive Rating<br></span> 
      <span class=" subheader">99%</span>
    </div>
  </div>

  <div class="row padTop">
   <div class="small-6 columns ">
    <span class="subheader">Speaks<br></span> 
    <span class=" subheader">English</span> 
  </div>
  <div class="small-6 columns padBottom ">
    <span class="subheader">Avg. Response Time<br></span> 
    <span class=" subheader">7 Hrs.</span>
  </div>
  <hr>
</div>



<div class="column row">

 <a href="" class="button hollow primary">Learn More</a>
 <a href="" class="button hollow success float-right">Contact Me</a>
</div>

</div>


</div>

</div>




</div>



<!-- small devices ends -->




<div class="large-8 columns  showGig panel floar-left">
  <div class=" column row">

    <span class="float-left">
      <h4><b><span class="p1"> 34 Reviews</span></b></h4>
    </span> 

    <span class="float-right  subheader">
      <h4><b> Rating : <span class="stat">4.8</span></b></h4>

    </span>


  </div>

  <!-- comments start -->
  <div class="column row">


    <!-- 1st comment -->

    <div class="  callout radius ">

      <blockquote>
        Those people who think they  are a great annoyance to those of us who do.
        <cite>
          <div class="student">
            <div > <img class="photo" src="img/profile.jpg"></div>
            <p>John Doe</p>
            <p>Ice Land</p>
          </div>

        </cite>

        <p>YesterDay</p>
      </blockquote>

      <!-- sellers reply -->
      <div class="row">
        <div class="small-8 columns float-right">
          <blockquote>
            Thanks for yor review
            <cite>
              <div class="student">
                <div > <img class="photo" src="img/profile.jpg"></div>
                <p>Sellers Reply</p>
              </div>

            </cite>

            
          </blockquote>


        </div>


      </div>

    </div>

    <!-- 2nd comment -->


    <div class="  callout radius ">

      <blockquote>
        Those people who think they  are a great annoyance to those of us who do.
        <cite>
          <div class="student">
            <div > <img class="photo" src="img/profile.jpg"></div>
            <p>John Doe</p>
            <p>Ice Land</p>
          </div>

        </cite>
      </blockquote>

      <div><span class="right "><h6 class="subheader">15 Days ago</h6></span></div>

    </div>


    <!-- 3rd cpmment -->
    <div class="  callout radius ">

      <blockquote>
        Those people who think they  are a great annoyance to those of us who do.
        <cite>
          <div class="student">
            <div > <img class="photo" src="img/profile.jpg"></div>
            <p>John Doe</p>
            <p>Ice Land</p>
          </div>

        </cite>

        <p>YesterDay</p>
      </blockquote>

      <!-- sellers reply -->
      <div class="row">
        <div class="small-8 columns float-right">
          <blockquote>
            Thanks for yor review
            <cite>
              <div class="student">
                <div > <img class="photo" src="img/profile.jpg"></div>
                <p>Sellers Reply</p>
              </div>

            </cite>

            
          </blockquote>


        </div>


      </div>

    </div>



    <!-- ---------- -->


  </div>


  <!-- comments end -->



</div>

<!-- reviews area ends -->

<hr>


<div class="small-12 columns panel">


  <div class=" column row">

    <span class="float-left padBottom">
      <h4><b> <span class="p1">More Gigg From Mr. NameOf SomeOne</span></b></h4>
    </span> 

  </div>

  <!-- four gigg starts -->

  <div class="row  " data-equalizer>

    <a href="gigg">


      <div class="medium-3 small-6 columns  gigg service" >
       <div class="bord">
        <div class="item service-icon-box">
          <img src="img/lgB.jpg">

        </div>

        <div class="service-heading" data-equalizer-watch>

          <div class=" column row"> <h5>I will test android, iPhone application or game</h5></div>

          <div class="row">


            <div class="small-6 columns">
             <h6 class="subheader "><small>by Mr. SomeOne</small></h6>
           </div>


           <div class="small-6 columns">
             <h5 class="subheader text-right">$5</h5>
           </div>

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

      <div class=" column row"> <h5>I will test android, l test android l test android iPhone application or game</h5></div>

      <div class="row">


        <div class="small-6 columns">
         <h6 class="subheader "><small>by Mr. SomeOne</small></h6>
       </div>


       <div class="small-6 columns">
         <h5 class="subheader text-right">$5</h5>
       </div>

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

      <div class=" column row"> <h5>I will test android,  or game</h5></div>

      <div class="row">


        <div class="small-6 columns">
         <h6 class="subheader "><small>by Mr. SomeOne</small></h6>
       </div>


       <div class="small-6 columns">
         <h5 class="subheader text-right">$5</h5>
       </div>

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

      <div class=" column row"> <h5>I will test android, iPhone game</h5></div>

      <div class="row">


        <div class="small-6 columns">
         <h6 class="subheader "><small>by Mr. SomeOne</small></h6>
       </div>


       <div class="small-6 columns">
         <h5 class="subheader text-right">$5</h5>
       </div>

     </div>
   </div>
 </div>
</div>

</a>


</div>


<!-- four gigg ends -->


<div class="column row  text-center viewMore">

  <a class="large button success  hollow" href="#">View More</a>

</div>




</div>




<!-- here catagory gigg -->



<div class="small-12 columns panel">


  <div class=" column row">

    <span class="float-left padBottom">
      <h4><b><span class="p1"> Recommended for you in catagory/Sub-Catagory</span></b></h4>
    </span> 

  </div>

  <!-- four gigg starts -->

  <div class="row  " data-equalizer>

    <a href="gigg">


      <div class="medium-3 small-6 columns  gigg service" >
       <div class="bord">
        <div class="item service-icon-box">
          <img src="img/lgB.jpg">

        </div>

        <div class="service-heading" data-equalizer-watch>

          <div class=" column row"> <h5>I will test android, iPhone application or game</h5></div>

          <div class="row">


            <div class="small-6 columns">
             <h6 class="subheader "><small>by Mr. SomeOne</small></h6>
           </div>


           <div class="small-6 columns">
             <h5 class="subheader text-right">$5</h5>
           </div>

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

      <div class=" column row"> <h5>I will test android, l test android l test android iPhone application or game</h5></div>

      <div class="row">


        <div class="small-6 columns">
         <h6 class="subheader "><small>by Mr. SomeOne</small></h6>
       </div>


       <div class="small-6 columns">
         <h5 class="subheader text-right">$5</h5>
       </div>

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

      <div class=" column row"> <h5>I will test android,  or game</h5></div>

      <div class="row">


        <div class="small-6 columns">
         <h6 class="subheader "><small>by Mr. SomeOne</small></h6>
       </div>


       <div class="small-6 columns">
         <h5 class="subheader text-right">$5</h5>
       </div>

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

      <div class=" column row"> <h5>I will test android, iPhone game</h5></div>

      <div class="row">


        <div class="small-6 columns">
         <h6 class="subheader "><small>by Mr. SomeOne</small></h6>
       </div>


       <div class="small-6 columns">
         <h5 class="subheader text-right">$5</h5>
       </div>

     </div>
   </div>
 </div>
</div>

</a>


</div>


<!-- four gigg ends -->


<div class="column row  text-center viewMore">

  <a class="large button success  hollow" href="#">View More</a>

</div>




</div>


<!-- catagory gig ends -->






</div>








@stop