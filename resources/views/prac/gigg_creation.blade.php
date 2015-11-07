<!doctype html>
<!--[if IE 9]>
<html class="lt-ie10" lang="en"> <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>


<div class="row rr">
    <div class="large-12 columns">
        <nav class="top-bar" data-topbar>
            <ul class="title-area">

                <li class="name">
                    <h1><a href="#">FiverrLike</a></h1>
                </li>
                <li class="toggle-topbar menu-icon">
                    <a href="#"><span>menu</span></a>
                </li>
            </ul>
            <section class="top-bar-section">

                <ul class="right">
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
            </section>
        </nav>
    </div>
</div>


{{--form code starts here--}}

{{--gig title--}}


<form>
    <div class="row">

        <div class="small-3 columns">
            <label for="right-label" class="right">GIG TITLE</label>
        </div>
        <div class="small-6 small-centered columns ">
            <input type="text" id="right-label" placeholder="I will do ...">
        </div>


    </div>


    <div class="row">

        <div class="small-3 columns">
            <label for="right-label" class="right">CATEGORY</label>
        </div>
        <div class="large-3 columns">

            <select>
                <option value="Programming">Programming</option>
                <option value="Assignment">Assignment</option>
                <option value="Home">Home Work</option>
                <option value="Etc">Etc</option>
            </select>

        </div>


        <div class="large-3 columns end">

            <select>
                <option value="Programming">SELECT SUB CATAGORY</option>
                <option value="Assignment">Assignment</option>
                <option value="Home">Home Work</option>
                <option value="Etc">Etc</option>
            </select>

        </div>

    </div>


    <div class="row">

        <div class="small-3 columns ">
            <label for="right-label" class="right">DESCRIPTION</label>
        </div>
        <div class="small-6 small-centered columns ">
            <input type="text" id="right-label">
        </div>


    </div>


    <div class="row">

        <div class="small-3 columns ">
            <label for="right-label" class="right">GIG METADATA</label>
        </div>

        <div class=" small-9 columns  end">


            <ul class="tabs vertical meta_p " data-tab>
                <li class="tab-title active"><a href="#panel11">Language</a></li>
                <li class="tab-title"><a href="#panel21">Service</a></li>
                <li class="tab-title"><a href="#panel31">Experience</a></li>
                <li class="tab-title"><a href="#panel41">Others</a></li>
            </ul>
            <div class="tabs-content ">
                <div class="content active" id="panel11">

                    <label>Choose Your Favorite</label>

                    <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label
                            for="pokemonRed">Red</label><br>
                    <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label
                            for="pokemonRed">Red</label><br>
                    <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label
                            for="pokemonRed">Red</label><br>
                    <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label
                            for="pokemonRed">Red</label><br>
                    <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label
                            for="pokemonRed">Red</label><br>

                </div>
                <div class="content" id="panel21">
                    <p>This is the second example. </p>
                </div>
                <div class="content" id="panel31">
                    <p>This is the third paneic tab example.</p>
                </div>
                <div class="content" id="panel41">
                    <p>This is the fourth pic tab example. </p>
                </div>
            </div>
        </div>

    </div>


    <div class="row">

        <div class="small-3 columns">
            <label for="right-label" class="right">TAGS</label>
        </div>
        <div class="small-6 small-centered columns ">
            <input type="text" id="right-label">
        </div>


    </div>


    <div class="row">
        <div class="small-2 small-centered columns">

            <a href="#" class="button success ">Submit</a>

        </div>
    </div>


</form>


{{--form code ends here--}}


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
</div>


<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>

</body>
</html>