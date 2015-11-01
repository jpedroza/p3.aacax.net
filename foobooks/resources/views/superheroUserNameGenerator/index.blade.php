@extends('layouts.master')


@section('title')
    Superhero User Name Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')

@stop

@section('content')
	<h1 style="font-family: Cabin Sketch; margin: -10px 0px 0px 0px;"> Superhero User Name Generator</h1>
	<hr style="border: 0; height: 0; box-shadow: 0 0 10px 1px black;">
	<p style="font-size: 2em;">
		Just in case you might be looking for a User Name Generator for the sake of your projects. I have a Super Hero inspired version that will also crank out a matching photo without the cape and mask of course, they gotta live too. If you are interested, just enter how many you want and press "Generate."
	</p>

	<form style="text-align: center;" method="Post" action="/superherousernamegenerator">
		<input type='hidden' name='_token' value='{{ csrf_token() }}'>
		Enter The Number of Users You Want: 
		<input type="text" name="numberOfUsers" style="width: 5%" value='{{old('numberOfUsers')}}'>
		&nbsp;&nbsp;&nbsp;&nbsp;
		@if($errors->get('numberOfUsers'))
			<ul>
				@foreach($errors->get('numberOfUsers') as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif	
		<input type="submit" value=""" style="height: 46px; width: 135px; background:url(img/generatebutton.png);">
	</form>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop