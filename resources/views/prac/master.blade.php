<!doctype html>
<!--[if IE 9]>
<html class="lt-ie10" lang="en"> <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>FiverrLike | @yield('title')</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <link rel="stylesheet" href="css/foundation-icons.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>
<!--<div class="row">-->
<!--<div class="large-12 columns ">-->

<!--<div class="row">-->
<div class="contain-to-grid">
    <nav class="top-bar" data-topbar role="navigation">


        <ul class="title-area">

            <li class="name">
                <h1><a href="#">FiverrLike</a></h1>
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="#"><span>MENU</span></a>
            </li>
        </ul>
        <section class="top-bar-section">


            <ul class="left">
                <li class="divider"></li>
                <li class="has-dropdown">
                    <a href="#">Main Item 1</a>
                    <ul class="dropdown">
                        <li><label>Section Name</label></li>
                        <li class="has-dropdown">
                            <a class="" href="#">Has Dropdown, Level 1</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="#">Dropdown Options</a>
                                </li>
                                <li>
                                    <a href="#">Dropdown Options</a>
                                </li>
                                <li>
                                    <a href="#">Level 2</a>
                                </li>
                                <li>
                                    <a href="#">Subdropdown Option</a>
                                </li>
                                <li>
                                    <a href="#">Subdropdown Option</a>
                                </li>
                                <li>
                                    <a href="#">Subdropdown Option</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Dropdown Option</a>
                        </li>
                        <li>
                            <a href="#">Dropdown Option</a>
                        </li>
                        <li class="divider"></li>
                        <li><label>Section Name</label></li>
                        <li>
                            <a href="#">Dropdown Option</a>
                        </li>
                        <li>
                            <a href="#">Dropdown Option</a>
                        </li>
                        <li>
                            <a href="#">Dropdown Option</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">See all ?</a>
                        </li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">Main Item 2</a>
                </li>
                <li class="divider"></li>
                <li class="has-dropdown">
                    <a href="#">Main Item 3</a>
                    <ul class="dropdown">
                        <li>
                            <a href="#">Dropdown Option</a>
                        </li>
                        <li>
                            <a href="#">Dropdown Option</a>
                        </li>
                        <li>
                            <a href="#">Dropdown Option</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">See all ?</a>
                        </li>
                    </ul>
                </li>
            </ul>


            <!-- log in area -->
            <ul class="right">
                <li><a href="#" data-reveal-id="myModal">Login</a></li>
                <li class=""><a class="signup" href="register" >Signup</a></li>

            </ul>

        </section>
    </nav>


</div>
<!--</div>-->


<!-- modal content -->

<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="login or sign up" aria-hidden="true" role="dialog">
    <div class="row">
        <div class="large-6 columns auth-plain small-centered text-center">
            <div class="signup-panel left-solid">
                <p class="welcome">Registered Users</p>

                <form method="POST" action="auth/login" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row collapse">
                        <div class="small-2  columns">
                            <span class="prefix"><i class="fi-torso-female"></i></span>
                        </div>
                        <div class="small-10  columns">
                            <input type="email" name="email"  placeholder="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="row collapse">
                        <div class="small-2 columns ">
                            <span class="prefix"><i class="fi-lock"></i></span>
                        </div>
                        <div class="small-10 columns ">
                             <input type="password" name="password" id="password" placeholder="password">
                        </div>
                    </div>
                     <button type="submit" class="btn  success radius expand ">LOGIN </button>

                     <div class="row collapse" data-equalizer>
                     	 <div class="small-6 columns text-left " data-equalizer-watch>
	                     	
    						  <input class="inline" type="checkbox" id="ch"  > <label class="inline" for="ch" ><p><span class="subheader">Remember me! </span></p></label> 
	                     </div>
	                      <div class="small-6 columns text-right " data-equalizer-watch>
	                      	<p class="forPass"> <a  href="#"><span   style="color:green;">Forgot Password ?</span></a> </p>
	                      </div>
	                 </div>

                </form>

                <a href="auth/facebook" class="facebook radius button split"> <span></span>sign in with facebook</a>

                <a href="auth/google" class="google radius button split"> <span></span>sign in with google +</a>
              
            </div>
        </div>

        

    </div>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>


<!--modal content ends here-->






<!-- main body here-->


@yield('body')


<!--main body ends here-->



<footer class="footer">
  <div class="row">
    <div class="small-12 medium-6 large-5 columns">
      <p class="logo"><i class="fi-shield"></i> STARWARS</p> 
      <p class="footer-links">
        <a href="#">Home</a>
        <a href="#">Blog</a>
        <a href="#">Pricing</a>
        <a href="#">About</a>
        <a href="#">Faq</a>
        <a href="#">Contact</a>
      </p>
      <p class="copywrite">Copywrite not copywrite © 2015</p>
    </div>
    <div class="small-12 medium-6 large-4 columns">
      <ul class="contact">
        <li><p><i class="fi-marker"></i>1595 Spring Street New Britain, CT 06051</p></li>
        <li><p><i class="fi-telephone"></i>+1-656-453-9966</p></li>
        <li><p><i class="fi-mail"></i>contact@emperor.com</p></li>
      </ul>
    </div>
    <div class="small-12 medium-12 large-3 columns">
      <p class="about">About Star Wars</p>
      <p class="about subheader">Strike me down, and I will become more powerful than you could possibly imagine.</p>
      <ul class="inline-list social">
        <a href="#"><i class="fi-social-facebook"></i></a>
        <a href="#"><i class="fi-social-twitter"></i></a>
        <a href="#"><i class="fi-social-linkedin"></i></a>
        <a href="#"><i class="fi-social-github"></i></a>
      </ul>
    </div>
  </div>
</footer>

<!--</div>-->
<!--</div>-->

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>

<script>
    $(document).foundation();


    

</script>

</body>
</html>