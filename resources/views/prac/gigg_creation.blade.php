@extends('prac.Demomaster')


@section('title', 'Home')



@section('body')


<div class="row panel">
	<div class="small-12 columns ">

		<div class="row columns text-center"><span class=" subheader"><h3>Gigg Creation</h3></span>
		<hr>
		</div>

			<form method="POST" action="/gig_create" enctype="multipart/form-data" class="giggsCr ">
			    {{ csrf_field() }}
			    <div class="row">

			        <div class="small-3 columns">
			            <label for="right-label" class="right tty">GIG TITLE</label>
			        </div>
			        <div class="small-9 small-centered columns title">
			            <input type="text" id="right-label" name="title" placeholder="I will do ..." value="{{ old('title') }}">
			        </div>


			    </div>


			    <div class="row">

			        <div class="small-3 columns float-left">
			            <label for="right-label" class="right tty ">CATEGORY</label>
			        </div>
			        <div class="small-3 columns">

			            <select class="subheader" id="mySelect" onchange="myFunction()" name="main_category">
			            	<option value="">SELECT CATAGORY</option>
			                <option value="University_Students">University Students</option>
			                <option value="Graphics_and_design">Graphics and design</option>
			                <option value="Online_Marketing">Online Marketing</option>
			                <option value="Writing">Writing</option>
			                <option value="Programming_and_Tech">Programming and Tech</option>
			                <option value="Business">Business</option>
			                <option value="other">Other</option>
			            </select>

			        </div>


			        <div class="small-3 columns float-right">

			            <select class="subheader" id="selectNumber" name="sub_category">
			                <option value="">SELECT SUB-CATAGORY</option>
			                
			            </select>

			        </div>

			    </div>


			    <div class="row padTop padBottom">

			        <div class="small-3 columns ">
			            <label for="right-label" class="right tty">COVER PHOTO</label>
			        </div>
			        <div class="small-9 small-centered columns desc">
			            <input type="file" class=" button primary hollow" name="gig_photo" value="{{ old('gig_photo') }}" accept="image/*">
			        </div>


			    </div>


			    <!-- photo upload here -->


			     <div class="row">

			        <div class="small-3 columns ">
			            <label for="right-label" class="right tty">DESCRIPTION</label>
			        </div>
			        <div class="small-9 small-centered columns desc">
			            <textarea name="description" style=" height: 150px;" placeholder="Descriptions " value="{{ old('description') }}"></textarea>
			        </div>


			    </div>







			   <!--  <div class="row">

			        <div class="small-3 columns ">
			            <label for="right-label" class="right">GIG METADATA</label>
			        </div>

			        <div class=" small-9 columns  end">


			           <div class="row collapse">
						  <div class="medium-3 columns">
						    <ul class="tabs vertical" id="example-vert-tabs" data-tabs>
						      <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Tab 1</a></li>
						      <li class="tabs-title"><a href="#panel2v">Tab 2</a></li>
						      <li class="tabs-title"><a href="#panel3v">Tab 3</a></li>
						      <li class="tabs-title"><a href="#panel4v">Tab 4</a></li>
						      <li class="tabs-title"><a href="#panel3v">Tab 5</a></li>
						      <li class="tabs-title"><a href="#panel4v">Tab 6</a></li>
						    </ul>
						    </div>
						    <div class="medium-9 columns">
						    <div class="tabs-content vertical" data-tabs-content="example-vert-tabs">
						      <div class="tabs-panel is-active" id="panel1v">
						        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						      </div>
						      <div class="tabs-panel" id="panel2v">
						        <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
						      </div>
						      <div class="tabs-panel" id="panel3v">
						        <img class="thumbnail" src="assets/img/rectangle-3.jpg">
						      </div>
						      <div class="tabs-panel" id="panel4v">
						        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						      </div>
						      <div class="tabs-panel" id="panel5v">
						        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						      </div>
						      <div class="tabs-panel" id="panel6v">
						        <img class="thumbnail" src="assets/img/rectangle-5.jpg">
						      </div>
						    </div>
						  </div>
						</div>
			        </div>

			    </div> -->


			    <div class="row padTop">

			        <div class="small-3 columns">
			            <label for="right-label" class="right tty">TAGS</label>
			        </div>
			        <div class="small-9 small-centered columns ">
			            <input type="text" name="tag" id="right-label" value="{{ old('tag') }}">
			        </div>


			    </div>






			    <!-- pricing -->

			    <div class="row">

			        <div class="small-3 columns">
			            <label for="right-label" class="right tty">SET PRICING & <br>DELIVERY</label>
			        </div>
			        <div class="small-9 columns">

				        <div class="column row collapse">
					        <div class="large-4 columns float-left">

					            <select  class="subheader" name="amount">
					            	<option value="">SELECT PRICE</option>
					                <option value="250">250 tk</option>
					                <option value="500">500 tk</option>
					                <option value="750">750 tk</option>
					                <option value="1000">1000 tk</option>
					                <option value="1500">1500 tk</option>
					                <option value="2000">2000 tk</option>
					                
					            </select>

					        </div>


					        <div class="large-4 columns float-right">

					            <select class="subheader" name="duration" >
					            	<option  value="">SELECT DELIVERY TIME</option>
					                <option value="1">1 Day Delivery</option>
					                <option value="2">2 Day Delivery</option>
					                <option value="3">3 Day Delivery</option>
					                <option value="4">4 Day Delivery</option>
					                <option value="5">5 Day Delivery</option>
					                <option value="6">6 Day Delivery</option>
					                <option value="7">7 Day Delivery</option>
					                <option value="8">8 Day Delivery</option>
					                <option value="9">9 Day Delivery</option>
					                <option value="10">10 Day Delivery</option>
					                <option value="11">11 Day Delivery</option>
					                <option value="12">12 Day Delivery</option>
					                <option value="13">13 Day Delivery</option>
					                <option value="14">14 Day Delivery</option>
					                <option value="15">15 Day Delivery</option>
					                <option value="16">16 Day Delivery</option>
					                <option value="17">17 Day Delivery</option>
					                <option value="18">18 Day Delivery</option>
					                <option value="19">19 Day Delivery</option>
					                <option value="20">20 Day Delivery</option>
					                <option value="21">21 Day Delivery</option>
					                <option value="22">22 Day Delivery</option>
					                <option value="23">23 Day Delivery</option>
					                <option value="24">24 Day Delivery</option>
					                <option value="25">25 Day Delivery</option>
					                <option value="26">26 Day Delivery</option>
					                <option value="27">27 Day Delivery</option>
					                <option value="28">28 Day Delivery</option>
					                <option value="29">29 Day Delivery</option>
					                <option value="30">30 Day Delivery</option>
					                
					                
					            </select>

					        </div>

				        </div>


				        <div class="column row padTop">

				         <span class="subheader">My Gigg Extras</span>
				        	

				        </div>

				        <div class="row padTop">

				        	<div class="small-3 columns">
				        		<input id="extraCheck"  type="checkbox" class="coupon_question" onchange="valueChanged()"><label for="extraCheck"><span class="subheader">Extra fast Delivery</span></label>

				        	</div>


				        	<div class="answer">

				        	<div class="small-2 columns subheader">
				        		<p>I'll deliver in only  </p>
				        	</div>


							<div class="small-3 columns">
				        		<select class="subheader" name="quick_delivery">
					            	<option  value="">SELECT DAYS</option>
					                <option value="1">1 Day </option>
					                <option value="2">2 Days </option>
					                <option value="3">3 Days </option>
					                <option value="4">4 Days </option>
					                <option value="5">5 Days </option>
					                <option value="6">6 Days </option>
					                <option value="7">7 Days </option>
					                <option value="8">8 Days </option>
					                <option value="9">9 Days </option>
					                <option value="10">10 Days </option>
					                <option value="11">11 Days </option>
					                <option value="12">12 Days </option>
					                <option value="13">13 Days </option>
					                <option value="14">14 Days </option>
					                <option value="15">15 Days </option>
					                <option value="16">16 Days </option>
					                <option value="17">17 Days </option>
					                <option value="18">18 Days </option>
					                <option value="19">19 Days </option>
					                <option value="20">20 Days </option>
					                <option value="21">21 Days </option>
					                <option value="22">22 Days </option>
					                <option value="23">23 Days </option>
					                <option value="24">24 Days </option>
					                <option value="25">25 Days </option>
					                <option value="26">26 Days </option>
					                <option value="27">27 Days </option>
					                <option value="28">28 Days </option>
					                <option value="29">29 Days </option>
					                <option value="30">30 Days </option>
					                
					                
					            </select>

					            </div>

					            <div class="small-1 columns subheader">

					            for only 

					            </div>


					            <div class="small-3 columns">

					             <select  class="subheader" name="quick_amount">
					            	<option value="">SELECT PRICE</option>
					                <option value="250">250 tk</option>
					                <option value="500">500 tk</option>
					                <option value="750">750 tk</option>
					                <option value="1000">1000 tk</option>
					                <option value="1500">1500 tk</option>
					                <option value="2000">2000 tk</option>
					                
					            </select>

					            </div>
					            </div>

				        	
				        	

				        </div>

				        



			        </div>
			       

			    </div>


			    <!-- requirements -->


			     <div class="row padTop">

			        <div class="small-3 columns">
			            <label for="right-label" class="right tty">REQUIREMENTS</label>
			        </div>
			        <div class="small-9 small-centered columns subheader ">
			        <P>Tell your buyer what you need to get started</P>

			            <input type="text" name="requirements" style=" height: 80px;" id="right-label" placeholder="for example dimensions , specifications .. " value="{{ old('description') }}">
			        </div>


			    </div>


			    <!-- button -->


			    <div class="row padTop">
			        <div class="small-2 small-centered columns">

			            <button type="submit" class="button  success ">Publish </button>

			        </div>
			    </div>


			</form>
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


<!-- form code ends here -->


@stop


<script src="js/jquery.js"></script>
<script >
	
function myFunction() {
    var x = document.getElementById("mySelect").value;

   	var select = document.getElementById("selectNumber");


$('#selectNumber')
    .empty()
    .append('<option selected="selected" value="whatever">SELECT SUB-CATAGORY</option>');

   			var University_Students =["Presentations and infographics","Creative Writing","Resumes and cover letter","Research and summaries","Virtual Assistant"];
   			var Graphics_and_design =["Social Media design","Photoshop editing","Presentations and infographics","T-shirt design","Logo design"];
    		var Online_Marketing =["SEO","Social Marketing","Blog mentions","Reviews","Video marketing","Fan Pages","Domain Research","Web analytics"];
    		var Writing =["Creative Writing","Articles and Blog posts","Resumes and cover letter","Research and summaries","Legal Writing"];
    		var Programming_and_Tech =["WordPress","Web programming","Ecommerce","Website builder","Support and IT","Databases"];
    		var Business=["Business plan","Presentations","Virtual Assistant"];
    		var other=[];
var loop =eval(x).length;

for (var i = 0; i < loop; i++) {
	
	var opt = eval(x)[i];
    var el = document.createElement("option");
    el.textContent = opt;
    el.value = opt;
    select.add(el);

};
    		// alert(eval(x).length);


}



function valueChanged()
{
    if($('.coupon_question').is(":checked"))   
        $(".answer").show();
    else
        $(".answer").hide();
}


$(function(){
    $('.answer').hide();
    
});


</script>