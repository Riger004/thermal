

@extends('prac.Demomaster')


@section('title', 'Home')


@section('body')



<div class=" column row panel ">
	<p><h4 class="float-left">Your Shopping Cart</h4> 
		<a href="/" class="float-right">Keep Shoppng</a></p>	
	</div>


	<div class="row">
		<div class="medium-8 columns padBottom">

			<!-- ordered gigg list item-->



			<div class="row border">
				<div class="small-12 columns cartItem padBottom ">
					<img src="img/profile.jpg" class="float-left">
					<p>I will create 12 Unique Slogans or Taglines For Your Business</p>
					<a href="#">Remove Gigg</a>
				</div>
				<hr>
				<div class="clearfix">
					<div class="small-8 columns">
						<span class=" subheader float-left">Basic Gig Quantity</span>
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
				<div class=" padTop">
					<div class="small-8 columns">
						<span class="  subheader float-left">Total</span>
					</div>
					<div class="small-4 columns">
						<span class="  subheader float-right">350tk</span>
					</div>
				</div>


			</div>


			<!-- first item ends -->

			<!-- second item  -->

			<div class="row border">
				<div class="small-12 columns cartItem padBottom">
					<img src="img/profile.jpg" class="float-left">
					<p>I will create 12 Unique Slogans or Taglines For Your Business</p>
					<a href="#">Remove Gigg</a>
				</div>
				<hr>
				<div class="clearfix">
					<div class="small-8 columns">
						<span class=" subheader float-left">Basic Gig Quantity</span>
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
				<div class=" padTop">
					<div class="small-8 columns">
						<span class="  subheader float-left">Total</span>
					</div>
					<div class="small-4 columns">
						<span class="  subheader float-right">350tk</span>
					</div>
				</div>


			</div>

			<!-- second item ends -->

		</div>


		<!-- proceed to payment -->
		<div class="medium-4 columns panel ">
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

			<a href="#" class="button success  expanded  large ">Proceed to Payment</a>

		</div>
	</div>









	@stop