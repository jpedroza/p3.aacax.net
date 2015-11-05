@extends('layouts.master')


@section('title')
    Your User Names
@stop


@section('head')

@stop

@section('content')
	<h1 style="font-family: Cabin Sketch; margin: -10px 0px 0px 0px;">Program Manager Ipsum</h1>
	<hr style="border: 0; height: 0; box-shadow: 0 0 10px 1px black;">

	@foreach ($paragraphs as $para) 
		@if ($para === "startTag")
			<p  id="indexManagerIpsum" style="font-size: 1.5em; text-align: justify; text-justify: inter-word;">
		@elseif ($para === "endTag")
			</p>
		@else
			{{ $para }}	 
		@endif
	@endforeach	
	
	<h1 style="font-family: Cabin Sketch;">Generated Paragraphs: {{ $howmanyparagraphs }}
	
@stop

@section('body')

@stop