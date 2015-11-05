@extends('layouts.master')


@section('title')
    Late Night Programmer's BFF
@stop



@section('head')
	<link href='https://fonts.googleapis.com/css?family=Cabin+Sketch:700,400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
	<link rel="stylesheet"  type="text/css" href="css/style2.css">
@stop

@section('content')
<div id="containerindex" style="width: 1140px; height: 300px">
	<h2 id="h2index">It's a Little Bit Support Group for 10 People (e.g., You and Me)</h2>
		<div id="center">
			<h3>Program Manager's Lorem Ipsum</h3>
			<hr>
			<img id="1" src="img/manageripsumgenerator.png">
			<p style="font-size: 1em; background-color: white;">
				This tool is a great instrument for filling in text late at night to design and set layout with a bunch of common place "Manager Speak." To use this tool, just select the number of paragraphs of common "Manager" phrases you would like and hit the "Produce" button.
			</p>
		</div> <!-- end of center -->

		<div id="left">
			<h3>Superhero User Name Generator</h3>
			<hr>
			<img id="2" src="img/usernamegenerator.png">
			<p style="font-size: 1em; background-color: white;">
				It's a Bird! It's a plane! Nope, It's just another way for you to come up with some really cool User Names. This tool creates a list of superhero inspired user names for testing systems, just select the number of user names you need, and hit the "Generate" button.
			</p>
		</div> <!-- end of left -->

		<div id="right">
			<h3>Late Night Power Boost</h3>
			<hr>
			<img id="3" src="img/boostmeup.png">
			<p style="font-size: 1em; background-color: white;">
				When it is "Zero-Dark-Thirty" and your eyes are drying out, you need a Farside Cartoon to at least smile, because the best thing about this is that we are still alive to complain about it. Just press the "Smile" button, and one will be specially crafted to refresh your spirit.
			</p>
		</div> <!-- end of right -->

</div> <!-- end of container -->


	<div id="pl">
		<img id="presentleft" src="img/presentingL.png">
	</div> <!-- end of pl -->
	<div id="pr">
		<img id="presentright" src="img/presentingR.png">
	</div> <!-- end of pr -->
	<div id="welcome">
		<h1 style="text-align: center;">Thank You For Stopping By Amigos!</h1>
	</div> <!-- welcome -->

	
<br class="clearfloat">	



<hr>
		<div id="navbar">
			<a id="pmlibuttonindex" href="manageripsum.html"><img id="pmliimg" src="img/pmlibutton.png" alt="Go To Program Manager's Lorem Ipsum"></a>
			<a id="sungbutton" href="usernamegenerator.html"><img id="sungimg" src="img/sungbutton.png" alt="Go To Superhero User Name Generator"></a>
			<a id="lnpbbuttonindex" href="farside.html"><img id="farsideimg" src="img/lnpbbutton.png" alt="Go To Late Night Power Boost"></a>
		</div> <!-- end of navbar -->

@stop


@section('body')

@stop