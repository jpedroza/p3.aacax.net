@extends('layouts.master')

 
@section('title')
    Your User Names
@stop


@section('head')

@stop


@section('content') 
	<h1 style="font-family: Cabin Sketch; margin: -10px 0px 0px 0px;">Your Custom Created Super Hero Inspired User List is Below</h1>
	{{-- <hr style="border: 0; height: 0; box-shadow: 0 0 10px 1px black;"> --}}
	<ol>
	{!! $outstring !!}
	</ol>	
	<h1 id="ug" style="font-family: Cabin Sketch;">Users Generated: {{ $numberOfUsers }}</h1> 
		
@stop


@section('body')

@stop