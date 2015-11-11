<html>
<head>
	<title>{{$user->name}}</title>
</head>
<body>
	<div class='container'>
		{!! Form::open(array('route' => 'profile.store')) !!}
		
		<div class="row">
			<label for="country">Country</label><br />
			<input id="country" class="input" name="country" type="text" value="" size="30"  /><br />
		</div>

		<div class="row">
			<label for="language">Your language:</label><br />
			<input id="language" class="input" name="language" type="text" value="" size="30" /><br />
		</div>


		<div class="row">
			<label for="recent_delivery">recent delivery:</label><br />
			<input id="recent_delivery" class="input" name="recent_delivery" type="text" value="" size="30" /><br />
		</div>

			<div class="row">
			<label for="avg_response_time">Average response time</label><br />
			<input id="avg_response_time" class="input" name="avg_response_time" type="text" value="" size="30" /><br />
		</div>


		<div class="row">
			<label for="about">Describe something about yourself:</label><br />
			<textarea id="about" class="input" name="about" rows="7" cols="30" ></textarea><br />
		</div>
		{!!Form::submit('Click Me!'); !!}
		{!! Form::close() !!}
	</div>

</body>
</html>