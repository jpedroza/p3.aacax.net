@extends('layouts.master')


@section('title')
    Your User Names
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')

@stop

@section('content')
	<h1 style="font-family: Cabin Sketch; margin: -10px 0px 0px 0px;">Your User List is Below</h1>
	<hr style="border: 0; height: 0; box-shadow: 0 0 10px 1px black;">
	<h2>Down Here goes the stuff</h2>
	<h1 style="font-family: Cabin Sketch;">Users Generated:</h1> {{ $numberOfUsers }}
	<h2>I hope  </h2> {{ $_token }}
	<h2>I hope  </h2> {{ $title }}
{{-- 	<hr style="border: 0; height: 0; box-shadow: 0 0 10px 1px black;"> --}}
{{-- 		<h1 style="font-family: Cabin Sketch;">Users Generated: {{ something }}</h1> --}}
{{-- 			{{ Done }}  --}}
		
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop