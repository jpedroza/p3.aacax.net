@extends('layouts.master')

 
@section('title')
    Late Night Power Boost
@stop



@section('head')

@stop

@section('content') 

{!! $out !!} 

	<form style="text-align: center;" method="Post" action="/latenightpowerboost">
		<input type='hidden' name='_token' value='{{ csrf_token() }}'>
		<h1 style="display: inline; font-family: Cabin Sketch;">If you need another Power Boost, press 'Generate.'</h1>
		<input type="submit" value="" style="display: inline; height: 46px; width: 135px; background:url(img/generatebutton.png);"></form>
	</form>
		
@stop


@section('body')

@stop