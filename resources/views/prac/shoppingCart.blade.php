

@extends('prac.Demomaster')


@section('title', 'Home')


@section('body')



<div class=" column row panel ">
	<p><h4 class="float-left">Your Shopping Cart</h4> 
		<a href="/" class="float-right">Keep Shoppng</a></p>	
	</div>


	<div class="row ">
		<div class="medium-8 columns padBottom cartbody">

			<!-- ordered gigg list item-->
			<?php $counter=0; ?>
			@foreach($gigs as $gig )

			<div class="row border">
				<div class="small-12 columns cartItem padBottom ">
					<img src="{{$gig->gig_photo}}" class="float-left">
					<p>{{$gig->title}}</p>
					<a href="#">Remove Gigg</a>
				</div>
				<hr>
				<div class="clearfix">
					<div class="small-8 columns">
						<span class=" subheader float-left">Quantity</span>
					</div>

					<h5>{{$quan_array[$counter]}}</h5>
				</div>
				<div class=" padTop">
					<div class="small-8 columns">
						<span class="  subheader float-left">Total</span>
					</div>
					<div class="small-4 columns">
						<span class="  subheader float-right">{{($gig->amount)* $quan_array[$counter]}} tk</span>
					</div>
				</div>

				<?php $counter++; ?>
			</div>

			@endforeach
			<!-- first item ends -->

		</div>


		<!-- proceed to payment -->
		<div class="medium-4 columns panel ">
			<div class="row">
				<div class="small-8 columns">
					<span class="  subheader float-left">Cart subtotal</span>
				</div>
				<div class="small-4 columns">
					<span class=" small-6 columns subheader float-right">{{$cart_total}}tk</span>
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
					<span class=" small-6 columns subheader float-right">{{$cart_total+50}}tk</span>
				</div>
			</div>

			<a href="#" class="button success  expanded  large ">Proceed to Payment</a>

		</div>
	</div>









	@stop