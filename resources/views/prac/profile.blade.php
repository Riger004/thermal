

@extends('prac.master')


@section('title', 'Home')


@section('body')

<!-- hero area -->
		<div class="ProHero" style="background-image:url('{{ asset('img/launch-orbit.jpg') }} ') ">
		     
		     <div class="row">

		       <div class="small-12 columns small-centered text-center heroText">
		        <span class="ProName">{{$user->name}}</span> <br>
		        @if(isset($profile))
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
						<div class="ProPic" style="background-image:url('{{ asset('img/profile.jpg') }} ')">
						</div>
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
																  
																  @if(isset($profile))
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
																		@if(isset($profile))
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

                <form method="POST" action="auth/login" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row ">
						    <div class="large-12 columns ">
						      <label><h5 class="subheader"> About information</h5>
						        <!-- <input type="textbox" class="info" placeholder="Previous info showen from database" /> -->
						        <textarea class="info" placeholder="Previous info showen from databases"></textarea>
						      </label>
						    </div>
					 </div>

					 <div class="row">
						    <div class="large-12 columns  ">
						      <label><h5 class="subheader">Upload New Profile Picture</h5></label>
						        <input type="file" name="pic" class="fileUp" accept="image/*">
						       <!--  <button class="file-upload">            
  									<input type="file" class="file-input">Choose File
  								</button> -->
						      
						    </div>
					 </div>
                   

					<div class="row editEmail"><div class="small-12  columns "><label><h5 class="subheader">New Email Address</h5></label></div></div>
                   	<div class="row collapse">
                        <div class="small-2  columns">

                        
                            <span class="prefix"><i class="fi-torso-female"></i></span>
                        </div>
                        <div class="small-10  columns">
                            <input type="email" name="New email"  placeholder="Previous email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="row editEmail"><div class="small-12  columns "><label><h5 class="subheader">New Language</h5></label></div></div>
                    <div class="row ">
						    <div class="large-12 columns ">
						        <input type="text" class="" placeholder="Previous Language" />
						    </div>
					 </div>


                </form>

                <a href="#" class="button success radious">Save</a>

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



