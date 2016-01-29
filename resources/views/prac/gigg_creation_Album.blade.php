@extends('prac.Demomaster')


@section('title', 'Home')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>
@section('body')

<div class=" cartbody">
	<div class="row padTop">
		<div class="small-12 columns text-center">
			<p><h4 class="subheader">Upload your Gig Photos</h4></p>
			<p class="subheader">For better look of your gig ,please upload same size images</p>
			<hr>
		</div>
		<div class="small-12 columns text-center albumTop padBottom">
			<form action="testlink" method="POST" class="dropzone  ">
				{{ csrf_field() }}
			</form>
		</div>

	</div>
	<div class="row albumTop">
		<div class="small-4 columns padBottom small-offset-4">
			<button type="submit" class="button success hollow large expanded ">Publish</button>
		</div>


	</div>

</div>




@stop

