<html>
<head>
	<title>Testing my data</title>
</head>
<body>

	<div class='container'>
		{!! Form::open(array('route' => 'testing.store')) !!}
		<div class="row">
			<label for="about">Your message:</label><br />
			<textarea id="about" class="input" name="about" rows="7" cols="30" required></textarea><br />
		</div>
		<div class="row">
			<label for="country">Country</label><br />
			<input id="country" class="input" name="country" type="text" value="" size="30"  required/><br />
		</div>
		<div class="row">
			<label for="language">Your language:</label><br />
			<input id="language" class="input" name="language" type="text" value="" size="30" required/><br />
		</div>
		{!!Form::submit('Click Me!'); !!}
		{!! Form::close() !!}
	</div>

</body>
</html>