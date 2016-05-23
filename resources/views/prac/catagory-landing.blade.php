@extends('prac.demoMaster')


@section('title', 'Gigg')



@section('body')

<div class="column row categoryTitle"> 
  @if(isset($meta_data->main_category))
  <span class="subTit">{{$meta_data->main_category}}<br></span>
  <span class="catTit">{{$meta_data->sub_category}}</span>
  @endif
</div>


<div class="row padTop ">

  

 
  <!-- cover photo -->

  <div class="small-12 columns"> 
    

    <div id="owl-gigg" class="owl-carousel owl-theme">

      
      <div class="item"><img src="/img/launch-orbit.jpg" alt="Mirror Edge"></div>
      
      
    </div>

  </div>



  <!--  -->

  <div class="small-12 columns"> 
    
    <div class="row">
     <div class="small-3 large-2 columns panel shopCatag">
      <!-- left side filter starts -->

      <p class="">
        <h4><b><span class="p1">Shop Category</span></b></h4>
      </p>
      <hr>

      <div class=" column row padBottom">
       <a href="#">All in category</a>
     </div>


     <form>
       <div class="column row ">
         
        <label> <span class="subheader">Delivery Time</span></label>
        
        <input type="radio" name="pokemon" value="24" id="pokemonRed" required><label for="pokemonRed">Up to 24 hours</label> <br>
        <input type="radio" name="pokemon" value="3d" id="pokemonBlue"><label for="pokemonBlue">Up to 3 days</label> <br>
        <input type="radio" name="pokemon" value="7d" id="pokemonYellow"><label for="pokemonYellow">Up to 7 days</label> <br>
        <input type="radio" name="pokemon" value="any" id="pokemonYellow"><label for="pokemonYellow">Any</label>

      </div>


      <div class="column row  padTop">
       
        <label> <span class="subheader">Seller Level</span></label>
        
        

        <input type="radio" name="pokemon" value="new" id="pokemonRed" required><label for="pokemonRed">New Seller</label> <br>
        <input type="radio" name="pokemon" value="1" id="pokemonBlue"><label for="pokemonBlue">Level One</label> <br>
        <input type="radio" name="pokemon" value="2" id="pokemonYellow"><label for="pokemonYellow">Level Two</label> <br>
        <input type="radio" name="pokemon" value="top" id="pokemonYellow"><label for="pokemonYellow">Top Rated Seller</label>
      </div>

      <div class="column row  text-center viewMore">
        <a class="button secondary  hollow" href="#">Search</a>
      </div>


    </form>



    <!-- left side filter ends -->
  </div>

  <div class="small-9 large-10 columns">
    <!-- main gigg showcase area  starts -->
    <div class="column row">
     <ul class="menu">
       <li><a href="#" class="actv">High Rating</a></li>
       <li><a href="#" class="">New</a></li>
     </ul>
   </div>

   <hr>


   <!-- gigg starts -->

   <!-- four gigg starts -->

   <div class="row  " data-equalizer>

    @foreach($data as $gigs )

    <a href="/gig_create/<?php echo Crypt::encrypt($gigs->id)?>">

     
      <div class="medium-3 small-6 columns  gigg service" >
       <div class="bord">
        <div class="item service-icon-box">
          <img src="{{$gigs->gig_photo}}">

        </div>

        <div class="service-heading" data-equalizer-watch>

          <div class=" column row"> <h6>{{$gigs->title}}</h6></div>

          <div class="row">
           
            
            <div class="small-6 columns">
             <h6 class="subheader "><small>{{$gigs->name}}</small></h6>
           </div>


           <div class="small-6 columns">
             <h5 class="subheader text-right">{{$gigs->amount}} BDT</h5>
           </div>

         </div>
       </div>
     </div>
   </div>

 </a>
 

 @endforeach

 

 
</div>



<!-- main gigg showcase area ends -->
</div>

</div>           
</div>

</div>


@stop