@extends('layouts.master')

@section('title')
    Manager Ipsum Generator
@stop


@section('head')

@stop

@section('content')
	<h1 style="font-family: Cabin Sketch; margin: -10px 0px 0px 0px;"> Program Manager's Lorem Ipsum Generator</h1>
	<hr style="border: 0; height: 0; box-shadow: 0 0 10px 1px black;">
	<p id="indexManagerIpsum" style="font-size: 1.5em;">
		If you need to generate some space filler text, this is the right place to do it. If you have ever worked or known someone from the software industry, you can be sure that they have heard this stuff meeting after meeting. After a while, it just numbs the ears, but for today, you get to use these words like a tool.
	</p>
	<h3 id="hias">Here is a Sample of Program Manager Ipsum Dolor</h3>  
	<p id="indexManagerIpsum" style="font-size: 1.5em;">
	Dynamic and Flexible, the robust functionality is to be admired. The package ships with Ad-Hoc Configuration Controls. Think of this place like Apple, with just a few less perks. The project is on glide path for deployment. If in doubt, just multi-task and things just work out. Remember, this is a Team Keurig, so treat it with Respect. Has anyone seen my iPhone around the break area. Has anyone seen my iPhone around the break area. I am telling you, I can't just make this stuff up. Once again, do not go directly to HR. I am happy to announce that we are rebooting the effort. Once again, do not go directly to HR. Why spend on Security, we got tons of firewalls and ACLs. This reminds me of my old IBM days. I am happy to announce that we are rebooting the effort. Just type faster, and things get done quicker. We are the more Secure Network sometimes. Has anyone seen Bill today? HR assures me that we don't need to hire 10 more: we just need to multi-task better. If in doubt, just multi-task and things just work out. 
	</p>
	<h3 style="font-family: Cabin Sketch; >To create your own custom stuff, just enter how many paragraphs you want, how many sentences per paragraph, and press Generate</h3>
	<form style="text-align: center;" method="Post" action="/manageripsum">
		<input type='hidden' name='_token' value='{{ csrf_token() }}'>
		How Many Paragraghs: 
		<input type="text" name="hmp" style="width: 5%" value={{old('hmp')}}>
		&nbsp;&nbsp;&nbsp;&nbsp; 
		@if ($errors->get('hmp')) 
			<ul>
				@foreach($errors->get('hmp') as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif	
	How Many Sentences Per Paragraph: 
	<input type="text" name="hmspp" style="width: 5%" value={{old('hmspp')}}>
	&nbsp;&nbsp;&nbsp;&nbsp;
		@if($errors->get('hmspp'))
			<ul>
				@foreach($errors->get('hmspp') as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>	
		@endif
	<input type="submit" value="submit" > {{-- style="height: 46px; width: 135px; background:url(img/generatebutton.png)" --}}
	</form> 
	
@stop	

@section('body')

@stop