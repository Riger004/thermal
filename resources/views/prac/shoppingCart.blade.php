

@extends('prac.Demomaster')


@section('title', 'Home')


@section('body')



<div class=" column row panel ">
<p><h4 class="float-left">Your Shopping Cart</h4> 
	<a href="/" class="float-right">Keep Shoppng</a></p>	
</div>


<div class="row">
	<div class="small-8 columns panel">

	  <!-- ordered gigg list -->
	  <div class="row">
	  	<div class="small-12 columns cartItem">
	  		<img src="img/profile.jpg" class="float-left">
	  		<p>Title of the gigg</p>
	  	</div>
	  </div>
		
	</div>
  

  <!-- proceed to payment -->
	<div class="small-4 columns panel">
		<div class="row">
			<div class="small-8 columns">
		      <span class="  subheader float-left">Cart subtotal</span>
		    </div>
		    <div class="small-4 columns">
		     <span class=" small-6 columns subheader float-right">300tk</span>
		    </div>
	   </div>


	   <div class="row">
			<div class="small-8 columns">
		      <span class="  subheader float-left">Processing fee</span>
		    </div>
		    <div class="small-4 columns">
		     <span class=" small-6 columns subheader float-right">50tk</span>
		    </div>
	   </div>
	   <hr>
	    <div class="row padBottom">
			<div class="small-8 columns">
		      <span class="  subheader float-left">Total</span>
		    </div>
		    <div class="small-4 columns">
		     <span class=" small-6 columns subheader float-right">350tk</span>
		    </div>
	   </div>

	  <a href="#" class="button success  expanded  ">Proceed to Payment</a>

	</div>
</div>









@stop