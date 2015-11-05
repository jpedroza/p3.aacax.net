@extends('layouts.master')


@section('title')
    Superhero User Name Generator
@stop


@section('head')

@stop

@section('content')
	<h1 style="font-family: Cabin Sketch; margin: -10px 0px 0px 0px;"> Superhero User Name Generator</h1>
	<hr style="border: 0; height: 0; box-shadow: 0 0 10px 1px black;">
	<p id="indexManagerIpsum" style="font-size: 1.5em;">
		Just in case you might be looking for a User Name Generator for the sake of your projects. I have a Super Hero inspired version that will also crank out a matching photo without the cape and mask of course, they gotta live too. If you are interested, just enter how many you want and press "Generate."
	</p>

	<form id="indexManagerIpsum" style="text-align: center;" method="Post" action="/superherousernamegenerator">
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
		<input type="submit" value="" style="height: 46px; width: 135px; background:url(img/generatebutton.png);">
	</form>
@stop


@section('body')

@stop