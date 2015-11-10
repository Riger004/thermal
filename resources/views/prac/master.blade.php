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
                <li class=""><a class="signup" href="#" data-reveal-id="myModal">Signup</a></li>

            </ul>

        </section>
    </nav>


</div>
<!--</div>-->


<!-- modal content -->

<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="login or sign up" aria-hidden="true" role="dialog">
    <div class="row">
        <div class="large-6 columns auth-plain">
            <div class="signup-panel left-solid">
                <p class="welcome">Registered Users</p>

                <form>
                    <div class="row collapse">
                        <div class="small-2  columns">
                            <span class="prefix"><i class="fi-torso-female"></i></span>
                        </div>
                        <div class="small-10  columns">
                            <input type="text" placeholder="username">
                        </div>
                    </div>
                    <div class="row collapse">
                        <div class="small-2 columns ">
                            <span class="prefix"><i class="fi-lock"></i></span>
                        </div>
                        <div class="small-10 columns ">
                            <input type="text" placeholder="password">
                        </div>
                    </div>
                </form>
                <a href="#" class="button ">Log In </a>
            </div>
        </div>

        <div class="large-6 columns auth-plain">
            <div class="signup-panel newusers">
                <p class="welcome"> Not a member yet?</p>

                <p>By creating an account with us, you will be able to move through the checkout process faster, view
                    and track your orders, and more.</p><br>
                <a href="#" class="button ">Sign Up</a></br>
            </div>
        </div>

    </div>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>


<!--modal content ends here-->






<!-- main body here-->


@yield('body')


<!--main body ends here-->



<footer class="row">
    <div class="large-12 columns">
        <hr>
        <div class="row">
            <div class="large-6 columns">
                <p>© Copyright no one at all. Go to town.</p>
            </div>
            <div class="large-6 columns">
                <ul class="inline-list right">
                    <li>
                        <a href="#">Link 1</a>
                    </li>
                    <li>
                        <a href="#">Link 2</a>
                    </li>
                    <li>
                        <a href="#">Link 3</a>
                    </li>
                    <li>
                        <a href="#">Link 4</a>
                    </li>
                </ul>
            </div>
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