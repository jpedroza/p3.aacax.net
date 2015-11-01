@extends('layouts.master')


@section('title')
    Late Night Power Boost
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')

@stop

@section('content')
	<h1 style="font-family: Cabin Sketch; margin: -10px 0px 0px 0px;">Late Night Power Boost</h1>
	<hr style="border: 0; height: 0; box-shadow: 0 0 10px 1px black;">
	<p style="font-size:2em">
		This should make you smile. Late at night when all has gone South, you can at least "Smile and Laugh a Little."
	</p>
	<img src="img/1.png">
	<form style="text-align: center;" method="Post" action="/latenightpowerboost">
		<input type='hidden' name='_token' value='{{ csrf_token() }}'>
		<h3 style="display: inline;">If you need another Power Boost" press "Generate."</h3>
		<input type="submit" value=""" style="display: inline; height: 46px; width: 135px; background:url(img/generatebutton.png);"></form>
	</form>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop