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

	<div class="container">
	  <div class="row">
	  
		<div class="col-sm-4">
				<h3>Program Manager's Lorem Ipsum</h3>
				<hr>  
				<img id="1" src="img/manageripsumgenerator.png">
				<p style="font-size: 1em; background-color: white;">
					This tool is a great instrument for filling in text late at night to design and set layout with a bunch of common place "Manager Speak." To use this tool, just select the number of paragraphs of common "Manager" phrases you would like and hit the "Produce" button.
				</p>
				<a href="/manageripsum"><img style="margin: 0px; position: absolute; top: 350px; left: 50%; margin-left: -145.5px;" src="img/pmlibutton.png" alt="Go To Program Manager's Lorem Ipsum"></a><!-- id="pmliimg" id="pmlibuttonindex" -->
		</div>
 
		<div class="col-sm-4">
				<h3>Superhero User Name Generator</h3>   
				<hr>
				<img id="2" src="img/usernamegenerator.png">
				<p style="font-size: 1em; background-color: white;">
					It's a Bird! It's a plane! Nope, It's just another way for you to come up with some really cool User Names. This tool creates a list of superhero inspired user names for testing systems, just select the number of user names you need, and hit the "Generate" button.
				</p>
				<a  href="/superherousernamegenerator"><img style="margin: 0px; position: absolute; top: 350px; left: 50%; margin-left: -147.5px;" src="img/sungbutton.png" alt="Go To Superhero User Name Generator"></a><!-- id="sungimg" id="sungbutton" -->
		</div>

		<div class="col-sm-4">
				<h3>Late Night Power Boost</h3>
				<hr>
				<img id="3" src="img/boostmeup.png">
				<p style="font-size: 1em; background-color: white;">
					When it is "Zero-Dark-Thirty" and your eyes are drying out, you need a Farside Cartoon to at least smile, because the best thing about this is that we are still alive to complain about it. Just press the "Smile" button, and one will be specially crafted to refresh your spirit.
				</p>
				<a href="/latenightpowerboost"><img style="margin: 0px; position: absolute; top: 350px; left: 50%; margin-left: -110.5px;" src="img/lnpbbutton.png" alt="Go To Late Night Power Boost"></a><!-- id="farsideimg" id="lnpbbuttonindex"   -->
		</div>

		</div><!-- row -->
		
		  <div class="jumbotron">
			<div id="pl">
				<img id="presentleft" src="img/presentingL.png">
			</div> <!-- end of pl -->
			<div id="pr">
				<img id="presentright" src="img/presentingR.png">
			</div> <!-- end of pr -->
			<div id="welcome">
				<h1 style="text-align: center;">Thank You For Stopping By Amigos!</h1>
			</div> <!-- welcome -->	
			<h2 id="h2index">It's a Little Bit Support Group for 10 People (e.g., You and Me)</h2>
		  </div><!-- end of jumbotron -->		
		
	</div><!-- container -->

@stop


@section('body')

@stop