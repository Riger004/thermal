<!doctype html>
<!--[if IE 9]>
<html class="lt-ie10" lang="en"> <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FiverrLike | @yield('title')</title>

    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/foundation-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('owl-carousel/owl.transitions.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>


</head>
<body>

        <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
          <div class="title-bar-title">Menu</div>
        </div>

        <div class="top-bar" id="example-menu">
         <div class="row column ">
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text"><a href="/">FiverrLike</a></li>
            </ul>
          </div>
          <div class="top-bar-right">
                    <ul class="dropdown menu" data-dropdown-menu data-options="closingTime:50">
                        <!-- <li>
                            <a href="#" ><i class=""></i></a>
                            <ul class="dropdown menu " data-dropdown-menu>
                                <li><a href="#" class="">Notifacions</a></li>
                            </ul>
                       </li> -->

                       <li id="noti_Container" >
                          <div id="noti_Counter"></div>   <!--SHOW NOTIFICATIONS COUNT.-->

                          <!--A CIRCLE LIKE BUTTON TO DISPLAY NOTIFICATION DROPDOWN.-->
                          <div id="noti_Button" class="fi-megaphone "></div>



                          <!--THE NOTIFICAIONS DROPDOWN BOX.-->
                          <div id="notifications">
                              <h3>Notifications</h3>
                              <div style="height:300px;">

                                <div class="column row text-center">

                                  <!-- notification add -->
                                  <small> Demo Notification : One Sale </small>

                                  <hr>

                                  <small> Demo Notification : Two Sale </small>

                                </div>

                              </div>




                              <div class="seeAll"><a href="#">Clear</a></div>
                          </div>
                      </li>

                       <li>
                            <a href="cart" ><i class="fi-shopping-cart "></i></a>
                            <ul class="dropdown menu " data-dropdown-menu>
                                <li><a href="cart" class="">Shopping Cart</a></li>
                            </ul>
                       </li>

                        <!-- <li>
                            <a href="messages" ><i class="fi-mail ico"></i></a>
                            <ul class="dropdown menu " data-dropdown-menu>
                                <li><a href="" class="">Messages</a></li>
                            </ul>
                       </li> -->


                       <li id="msg_Container" >
                          <div id="msg_Counter"></div>   <!--SHOW NOTIFICATIONS COUNT.-->

                          <!--A CIRCLE LIKE BUTTON TO DISPLAY NOTIFICATION DROPDOWN.-->
                          <div id="msg_Button" class="fi-mail "></div>



                         
                      </li>

                      @if(Auth::check())

                       <li class="uy" >

                                    <a href="#" class="topbarPa" >&nbsp;&nbsp;Hello {{Auth::user()->name}}&nbsp;&nbsp;</a>
                                    <ul  class="dropdown menu zz text-center" data-dropdown-menu>


                                        <li>
                                            <a href="#" ><span class="p2">DashBoard</span></a>
                                        </li>

                                        <li>
                                            <a href="/gig_create"><span class="p2">Create Giggs</span></a>

                                        </li>

                                        <li>

                                            <a href="/profile"><span class="p2">My Profile</span></a>

                                        </li>

                                        <li>

                                            <a href="/auth/logout"><span class="p2">Log Out</span></a>

                                        </li>

                            </ul>

                        </li>
                        @else
                        <li><a href="#" class=" button success hollow topbarPa" data-toggle="exampleModal11">&nbsp;Login&nbsp;</a></li>

                        <li><a class="signup button success " href="register" >&nbsp;Sign Up&nbsp;</a></li>

                        @endif
                    </ul>
          </div>
         </div>
        </div>

<div class="pan">
<div class="row show-for-medium " >
		<div class="small-12 columns ">


				<ul class=" dropdown vv menu expanded text-center " data-dropdown-menu data-options="closingTime:50" >

				  <li>
				  		<a href="#" >University Students</a>
        				<ul class=" vertical menu" >
        				  <li><a href="/catagory/Presentations and infographics">Presentations and infographics</a></li>
        				  <li><a href="/catagory/Creative Writing">Creative Writing</a></li>
        				  <li><a href="/catagory/Resumes and cover letter">Resumes and cover letter</a></li>
        				  <li><a href="/catagory/Research and summaries">Research and summaries</a></li>
        				  <li><a href="/catagory/Virtual Assistant">Virtual Assistant</a></li>
        				</ul>

				  </li>

				  <li>
				  		<a href="#">Graphics and design</a>

				<ul class="nested vertical menu">
				  <li><a href="catagory">Social Media design</a></li>
				  <li><a href="catagory">Photoshop editing</a></li>
				  <li><a href="catagory">Presentations and infographics</a></li>
				  <li><a href="catagory">T-shirt design</a></li>
				  <li><a href="catagory">Logo design</a></li>
				</ul>

				  </li>

				   <li>
				  		<a href="#" >Online Marketing</a>

				<ul class="nested vertical menu">
				  <li><a href="catagory">SEO</a></li>
				  <li><a href="catagory">Social Marketing</a></li>
				  <li><a href="catagory">Blog mentions</a></li>
				  <li><a href="catagory">Reviews</a></li>
				  <li><a href="catagory">Video marketing</a></li>
				  <li><a href="catagory">Fan Pages</a></li>
				  <li><a href="catagory">Domain Research</a></li>
				  <li><a href="catagory">Web analytics</a></li>
				</ul>

				  </li>

				  <li>
				  		<a href="#" >Writing</a>

				<ul class="nested vertical menu" >
				  <li><a href="catagory">Creative Writing</a></li>
				  <li><a href="catagory">Articles and Blog posts</a></li>
				  <li><a href="catagory">Resumes and cover letter</a></li>
				  <li><a href="catagory">Research and summaries</a></li>
				  <li><a href="catagory">Legal Writing</a></li>
				</ul>

				  </li>

				  <li>
				  		<a href="#" >Programming and Tech</a>

				<ul class="nested vertical menu" >
				  <li><a href="catagory">WordPress</a></li>
				  <li><a href="catagory">Web programming</a></li>
				  <li><a href="catagory">Ecommerce</a></li>
				  <li><a href="catagory">Website builder</a></li>
				  <li><a href="catagory">Support and IT</a></li>
				  <li><a href="catagory">Databases</a></li>
				</ul>

				  </li>

				  <li>
				  		<a href="#" >Business</a>

				<ul  class="nested vertical menu" >
				  <li><a href="catagory">Business plan</a></li>
				  <li><a href="catagory">Presentations</a></li>
				  <li><a href="catagory">Virtual Assistant</a></li>

				</ul>

				  </li>

				  <li><a href="catagory">Other</a></li>

				</ul>

		</div>
</div>

</div>


<!-- sub menu for small devices -->

<div class="panA">
<div class="row hide-for-medium " >
        <div class="small-12 columns "  >

                <ul class=" dropdown v1 menu float-center text-center" data-dropdown-menu ata-dropdown-menu data-options="closingTime:50">

                  <li>
                        <a href="#" >University Students</a>

                        <ul class=" vertical menu" >
                          <li><a href="catagory">Presentations and infographics</a></li>
                          <li><a href="catagory">Creative Writing</a></li>
                          <li><a href="catagory">Resumes and cover letter</a></li>
                          <li><a href="catagory">Research and summaries</a></li>
                          <li><a href="catagory">Virtual Assistant</a></li>
                        </ul>

                  </li>

                  <li>
                        <a href="#">Graphics and design</a>

                <ul class="nested vertical menu">
                  <li><a href="catagory">Social Media design</a></li>
                  <li><a href="catagory">Photoshop editing</a></li>
                  <li><a href="catagory">Presentations and infographics</a></li>
                  <li><a href="catagory">T-shirt design</a></li>
                  <li><a href="catagory">Logo design</a></li>
                </ul>

                  </li>

                   <li>
                        <a href="#" >Online Marketing</a>

                <ul class="nested vertical menu">
                  <li><a href="catagory">SEO</a></li>
                  <li><a href="catagory">Social Marketing</a></li>
                  <li><a href="catagory">Blog mentions</a></li>
                  <li><a href="catagory">Reviews</a></li>
                  <li><a href="catagory">Video marketing</a></li>
                  <li><a href="catagory">Fan Pages</a></li>
                  <li><a href="catagory">Domain Research</a></li>
                  <li><a href="catagory">Web analytics</a></li>
                </ul>

                  </li>

                  </ul>

        </div>
</div>


<div class="row hide-for-medium " >
        <div class="small-12 columns "  >

                <ul class=" dropdown v2 menu float-center text-center" data-dropdown-menu>


                   <li>
                      <a href="#" ><span class="xx">Writing</span></a>

                <ul class="nested vertical menu" >
                  <li><a href="catagory">Creative Writing</a></li>
                  <li><a href="catagory">Articles and Blog posts</a></li>
                  <li><a href="catagory">Resumes and cover letter</a></li>
                  <li><a href="catagory">Research and summaries</a></li>
                  <li><a href="catagory">Legal Writing</a></li>
                </ul>

                  </li>
               <li>
                        <a href="#" >Programming and Tech</a>

                <ul class="nested vertical menu" >
                  <li><a href="catagory">WordPress</a></li>
                  <li><a href="catagory">Web programming</a></li>
                  <li><a href="catagory">Ecommerce</a></li>
                  <li><a href="catagory">Website builder</a></li>
                  <li><a href="catagory">Support and IT</a></li>
                  <li><a href="catagory">Databases</a></li>
                </ul>

                  </li>

                  <li>
                        <a href="#" >Business</a>

                <ul  class="nested vertical menu" >
                  <li><a href="catagory">Business plan</a></li>
                  <li><a href="catagory">Presentations</a></li>
                  <li><a href="catagory">Virtual Assistant</a></li>

                </ul>

                  </li>

                  <li><a href="catagory">Other</a></li>

                </ul>

        </div>
</div>


</div>




<!-- modal content -->

<div class="reveal medium panel " id="exampleModal11" data-reveal>
<div class="row columns text-center"><span class=" subheader"><h3>Login to Fiverr</h3></span>
</div>
<hr>

                <form method="POST" action="auth/login" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row collapse padTop">
                        <div class="small-2  columns text-center">
                            <span class="prefix "><i class="fi-torso-female"></i></span>
                        </div>
                        <div class="small-10  columns">
                            <input type="email" name="email"  placeholder="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="row collapse">
                        <div class="small-2 columns text-center">
                            <span class="prefix"><i class="fi-lock"></i></span>
                        </div>
                        <div class="small-10 columns ">
                             <input type="password" name="password" id="password" placeholder="password">
                        </div>
                    </div>
                     <button type="submit" class="button  success hollow radius expanded ">LOGIN </button>

                     <div class="row collapse" >
                         <div class="small-6 columns text-left " >

                              <input  type="checkbox" id="chh"  > <label  for="chh" ><p><span class="subheader">Remember me! </span></p></label>
                         </div>
                          <div class="small-6 columns text-right  " >
                             <a  href="#"><span  class="forPass">Forgot Password ? </span></a>
                          </div>

                     </div>



                </form>

                <a href="auth/facebook" class="facebook button split hollow "> <span></span>sign in with facebook</a>

                <a href="auth/google" class="google button split hollow"> <span></span>sign in with google +</a>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


<!--modal content ends here-->



<!-- main body here-->


@yield('body')


<!--main body ends here-->



<footer class="footer">
  <div class="row">
    <div class="small-12 columns">
      <p class="slogan">FiverLike</p>
      <p class="contact subheader">contact@fiverlike.com</p>

        <a href="#" class="icon-button twitter">
          <i class="fi-social-twitter"></i><span></span>
        </a>
        <a href="#" class="icon-button facebook">
          <i class="fi-social-facebook"></i><span></span>
        </a>
        <a href="#" class="icon-button gplus">
          <i class="fi-social-google-plus"></i><span></span>
        </a>

        <hr>

        <p class="developer"> <span class="subheader">Developed by </span> <a href="#" class="brand1">BrandName</a></p>
      <p class="copywrite"> Copywrite © 2015</p>
    </div>
  </div>
</footer>



</body>


<script type="text/javascript" src="{{ URL::asset('js/all.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('owl-carousel/owl.carousel.js') }}"></script>

<script >



$(document).ready(function() {

  $("#owl-demo").owlCarousel({

      navigation : false, // Show next and prev buttons

      slideSpeed : 900,
      paginationSpeed : 600,
      singleItem:true,
      transitionStyle : "fadeUp",
      autoPlay : 5000


      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

  });


   $("#owl-gigg").owlCarousel({

      navigation : true, // Show next and prev buttons

      slideSpeed : 900,
      paginationSpeed : 600,
      singleItem:true,
      transitionStyle : "fadeUp",
      autoPlay : false


      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

  });


  // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
       $('#noti_Counter')
           .css({ opacity: 0 })
           .text('7')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
           .css({ top: '-10px' })
           .animate({ top: '-2px', opacity: 1 }, 500);



           $('#msg_Counter')
           .css({ opacity: 0 })
           .text('7')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
           .css({ top: '-10px' })
           .animate({ top: '-2px', opacity: 1 }, 500);

       $('#noti_Button').click(function () {

           // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
           $('#notifications').fadeToggle('fast', 'linear', function () {
               if ($('#notifications').is(':hidden')) {
                   $('#noti_Button').css('background-color', '#2E467C');
               }
               else $('#noti_Button').css('background-color', '#FFF');        // CHANGE BACKGROUND COLOR OF THE BUTTON.
           });

           $('#noti_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

           return false;
       });


        $('#msg_Button').click(function () {

           // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
          

           $('#msg_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

           return false;
       });

       // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
       $(document).click(function () {
           $('#notifications').hide();

           // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
           if ($('#noti_Counter').is(':hidden')) {
               // CHANGE BACKGROUND COLOR OF THE BUTTON.
               $('#noti_Button').css('background-color', '#2E467C');
           }

            if ($('#msg_Counter').is(':hidden')) {
               // CHANGE BACKGROUND COLOR OF THE BUTTON.
               $('#msg_Button').css('background-color', '#2E467C');
           }
       });

       $('#notifications').click(function () {
           return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
       });

});

</script>



</body>
</html>
