

@extends('prac.master')


@section('title', 'Home')


@section('body')

<!-- hero area -->
<div class="ProHero" style="background-image:url('{{ asset('img/launch-orbit.jpg') }} ') ">
	
	<div class="row">

		<div class="small-12 columns small-centered text-center heroText">
			<span class="ProName">{{$user->name}}</span> <br>
			@if(isset($profile->short_info))
			<span class="ProReview">{{$profile->short_info}}</span>
			@else 
			<span class="ProReview"> Describe yourself in one line?</span> 
			@endif
		</div>

	</div>
</div>


<!-- profile pic and details starts here -->
<div class="cont">

	<div class="row">
		<div class="small-12 columns  ">
			@if(isset($profile->profile_pic))
			<div class="ProPic" style="background-image:url('{{$profile->profile_pic}} ')">
			</div>
			@else
			<div class="ProPic" style="background-image">
			</div>
			@endif
		</div>

	</div>

	<div class="row Prodetail ">

		<div class="small-12 columns ">

			<!-- personal details here -->
			<div class=" ProDetails panel">

				<div class="row">
					<div class="small-8 columns">

						<div class="row"> 

							<div class="small-12 columns">

								<!-- details about service provided by person -->
								<h4><b>About Mr. {{$user->name}}</b></h4>
								
								@if(isset($profile->about))
								<p>	
									{{$profile->about}}
								</p>
								@else
								<P>
									This is where you make your pitch to potential buyers. Describe your background, your passion and your personality.
								</P>
								@endif

							</div>
						</div>


						<!-- location recent delivery info -->
						<div class="row">
							<div class="small-6 columns">
								
								<ul class="no-bullet">
									@if(isset($profile->country))
									<li class="fi-mountains"> Location: {{$profile->country}} </li>
									@else
									<li class="fi-mountains"> Location: please set your location </li>
									@endif
									@if(isset($profile->avg_response_time))
									<li class="fi-compass"> Avg. Response Time: {{$profile->avg_response_time}} </li>
									@endif
									<li class="fi-checkbox"> Email: {{$user->email}} Verified </li>

								</ul>

							</div>

							<div class="small-6 columns">
								
								<ul class="no-bullet">
									@if(isset($profile->language))
									<li class="fi-megaphone"> Speaks: {{$profile->language}} </li>
									@else
									<li class="fi-megaphone"> Speaks: please set your language </li>
									@endif

									@if(isset($profile->recent_delivery))
									<li class="fi-clipboard-notes"> Recent Delivery: {{$profile->recent_delivery}} </li>
									@endif

									@if(isset($profile->phone_num))
									<li class="fi-megaphone"> Mobile: {{$profile->phone_num}} </li>
									@else
									<li class="fi-megaphone"> Mobile: please set your mobile number </li>
									@endif
								</ul>

							</div>



							
							



						</div>


						<a href="#" class="button success radius">Contact </a>

						<a href="#" data-reveal-id="myModal1" class="button secondary radious right">Edit Info</a>



					</div> 

					<!-- best seller info -->
					<div class="small-4 columns"> 
						<h5><b>Mr. Name Of Person's Best Seller</b></h5>
						<div class="item">
							<img src="img/mdA.jpg">

						</div>

						<div class="panel">
							<h5>Item Name</h5>
							<h6 class="subheader">$000.00</h6>
						</div>

					</div> 



					<div class="small-4 colums">
						@if (count($errors) > 0)
						<!-- Form Error List -->
						<div class="alert alert-danger">
							<strong>Whoops! Something went wrong!</strong>

							<br><br>

							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
					</div>

				</div>



			</div>

		</div>

	</div>

</div>






<!-- modal content -->

<div id="myModal1" class="reveal-modal " data-reveal aria-labelledby="login or sign up" aria-hidden="true" role="dialog" style="display: none">
	<div class="row">
		<div class="large-8 columns auth-plain small-centered text-center">
			<div class="signup-panel left-solid">
				<p class="welcome">Edit Personal Information</p>

				<form method="POST" action="/profile" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="row ">
						<div class="large-12 columns ">
							<label><h5 class="subheader"> Short information</h5>
								<!-- <input type="textbox" class="info" placeholder="Previous info showen from database" /> -->
								<textarea class="info" name="short_info" placeholder="Describe yourself in one line?" value="{{ old('short_info') }}"></textarea>
							</label>
							<label><h5 class="subheader"> Briefly Describe </h5>
								<!-- <input type="textbox" class="info" placeholder="Previous info showen from database" /> -->
								<textarea class="info" name="about" value="{{old('abbout')}}" placeholder="This is where you make your pitch to potential buyers. Describe your background, your passion and your personality."></textarea>
							</label>
						</div>
					</div>

					
					
					<div class="row editEmail"><div class="small-12  columns "><label><h5 class="subheader">Language, Country & Phone number</h5></label></div></div>
					<div class="row ">
						<div class="large-12 columns ">
							<input type="text" class="info" name="language" value="{{old('language')}}" placeholder="In which language you're most comfortable to talk with the clients?" />
						</div>
						<div class="large-6 columns ">
							<input type="text" class="info" name="country" value="{{old('country')}}" placeholder="In which country you're currently living?" />
						</div>
						<div class="large-6 columns ">
							<input type="text" class="info" name="phone_num" value="{{old('phone_num')}}" placeholder="please enter your valid phone number" />
						</div>
					</div>
					<div class="row">
						<div class="large-12 columns">
							<label><h5 class="subheader">Upload New Profile Picture</h5></label>
							<input type="file" name="profile_pic" class="fileUp" accept="image/*">
						</div>
					</div>

					

					<button type="submit" class="btn  success radius">Save </button>


				</form>



			</div>
		</div>

		

	</div>
	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>


<!--modal content ends here-->




<!-- persons gigg info -->
<div class="row giggs panel ">


	<div class="small-12 columns  ">


		<div class="row giggPadd ">
			<div class="small-12 columns  ">
				<p><h4><b>Mr. Name Of Person's Giggs </b></h4></p>
			</div>
		</div>

		<!-- giggs item start -->





		<div class="row ">
			<div class="large-4 small-6 columns giggItem ">
				<div class="item">
					<img src="img/profile.jpg">

				</div>

				<div class="panel">
					<h5>Item Name</h5>
					<h6 class="subheader">$000.00</h6>
				</div>
			</div>

			<div class="large-4 small-6 columns giggItem ">
				<div class="item">
					<img src="img/mdA.jpg">
				</div>


				<div class="panel">
					<h5>Item Name</h5>
					<h6 class="subheader">$000.00</h6>
				</div>
			</div>
			<div class="large-4 small-6 columns giggItem">

				<div class="item">
					<img src="img/lgC.jpg">
				</div>

				<div class="panel">
					<h5>Item Name</h5>
					<h6 class="subheader">$000.00</h6>
				</div>
			</div>
			<div class="large-4 small-6 columns giggItem">

				<div class="item">
					<img src="img/lgB.jpg">
				</div>

				<div class="panel">
					<h5>Item Name</h5>
					<h6 class="subheader">$000.00</h6>
				</div>
			</div>
			<div class="large-4 small-6 columns giggItem">
				<div class="item">
					<img src="img/smA.jpg">
				</div>

				<div class="panel">
					<h5>Item Name</h5>
					<h6 class="subheader">$000.00</h6>
				</div>
			</div>
			<div class="large-4 small-6 columns giggItem">
				<div class="item">
					<img src="img/lgB.jpg">
				</div>

				<div class="panel">
					<h5>Item Name</h5>
					<h6 class="subheader">$000.00</h6>
				</div>
			</div>
			
		</div>

		






		<!-- giggs item end -->







	</div>
</div>




<!-- reviews starts -->


<div class="row giggs panel clearfix">


	<div class="small-12 columns  ">


		<div class="row giggPadd ">
			<div class="small-12 columns  ">
				<p><h4><b>Mr. Name Of Person's Reviews </b></h4></p>
			</div>
		</div>

		

		<div class="row" >

			<div class="small-6 columns ">

				
				<div class="row panel callout radius">
					
					<div class="small-12 large-12 columns testimonial">
						<div class="quote text-justify">
							<p>Lorem ipsum dolor sit amet, eu tristique sem rutrum.</p>
						</div>
						<div class="student">
							<div > <img class="photo" src="img/profile.jpg"></div>
							<p>John Doe</p>
							<p>Important person, some Company</p>
						</div>
						<div><span class="right "><h4 class="subheader"><small>15 Days ago</small></h4></span></div>
					</div>
					
				</div>   


				<div class="row panel callout radius">
					
					<div class="small-12 large-12 columns testimonial">
						<div class="quote text-justify">
							<p>Lorem ipsum dolor i, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum.</p>
						</div>
						<div class="student">
							<div > <img class="photo" src="img/profile.jpg"></div>
							<p>John Doe</p>
							<p>Important person, some Company</p>
						</div>
						<div><span class="right "><h4 class="subheader"><small>9 Days ago</small></h4></span></div>
					</div>
					
				</div>



				<div class="row panel callout radius">
					
					<div class="small-12 large-12 columns testimonial">
						<div class="quote text-justify">
							<p>Lorem ipsum dolor sit amet, eu tristique sem rutrum.</p>
						</div>
						<div class="student">
							<div > <img class="photo" src="img/profile.jpg"></div>
							<p>John Doe</p>
							<p>Important person, some Company</p>
						</div>
						<div><span class="right "><h4 class="subheader"><small>15 Days ago</small></h4></span></div>
					</div>
					
				</div>   



				<div class="row panel callout radius">
					
					<div class="small-12 large-12 columns testimonial">
						<div class="quote text-justify">
							<p>Lorem ipsum dolor sit amet, eu tristique sem rutrum.</p>
						</div>
						<div class="student">
							<div > <img class="photo" src="img/profile.jpg"></div>
							<p>John Doe</p>
							<p>Important person, some Company</p>
						</div>
						<div><span class="right "><h4 class="subheader"><small>15 Days ago</small></h4></span></div>
					</div>
					
				</div>   


			</div>




			<div class="small-6 columns " data-equalizer-watch >

				
				<div class="row panel callout radius">
					
					<div class="small-12 large-12 columns testimonial">
						<div class="quote text-justify">
							<p>Lorem ipsum dolor i, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum.</p>
						</div>
						<div class="student">
							<div > <img class="photo" src="img/profile.jpg"></div>
							<p>John Doe</p>
							<p>Important person, some Company</p>
						</div>
						<div><span class="right "><h4 class="subheader"><small>9 Days ago</small></h4></span></div>
					</div>
					
				</div>


				<div class="row panel callout radius">
					
					<div class="small-12 large-12 columns testimonial">
						<div class="quote text-justify">
							<p>Lorem ipsum dolor sit amet, eu tristique sem rutrum.</p>
						</div>
						<div class="student">
							<div > <img class="photo" src="img/profile.jpg"></div>
							<p>John Doe</p>
							<p>Important person, some Company</p>
						</div>
						<div><span class="right "><h4 class="subheader"><small>15 Days ago</small></h4></span></div>
					</div>
					
				</div>



				<div class="row panel callout radius">
					
					<div class="small-12 large-12 columns testimonial">
						<div class="quote text-justify">
							<p>Lorem ipsum dolor i, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum.</p>
						</div>
						<div class="student">
							<div > <img class="photo" src="img/profile.jpg"></div>
							<p>John Doe</p>
							<p>Important person, some Company</p>
						</div>
						<div><span class="right "><h4 class="subheader"><small>9 Days ago</small></h4></span></div>
					</div>
					
				</div>



				<div class="row panel callout radius">
					
					<div class="small-12 large-12 columns testimonial">
						<div class="quote text-justify">
							<p>Lorem ipsum dolor sit amet, eu tristique sem rutrum.</p>
						</div>
						<div class="student">
							<div > <img class="photo" src="img/profile.jpg"></div>
							<p>John Doe</p>
							<p>Important person, some Company</p>
						</div>
						<div><span class="right "><h4 class="subheader"><small>15 Days ago</small></h4></span></div>
					</div>
					
				</div>      



				

				
			</div>

		</div>





	</div>


</div>

<!-- reviews ends -->




<script src="js/vendor/jquery.js"></script>
<script >
var e=$('.ProDetails').outerHeight();	

$('.cont').height(e+15);
// 
//alert(e);

</script>

@stop














