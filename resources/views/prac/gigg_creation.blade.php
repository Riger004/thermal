@extends('prac.master')


@section('title', 'Home')



@section('body')


<div class="row">
	<div class="small-12 columns">

			<form method="POST" action="/gigs" enctype="multipart/form-data" class="giggsCr panel">
			    {{ csrf_field() }}
			    <div class="row">

			        <div class="small-3 columns">
			            <label for="right-label" class="right">GIG TITLE</label>
			        </div>
			        <div class="small-6 small-centered columns title">
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
			        <div class="small-6 small-centered columns desc">
			            <textarea style=" height: 150px;" placeholder="Descriptions "></textarea>
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

		</div>

</div>


<!-- form code ends here -->


@stop