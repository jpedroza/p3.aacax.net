<?php

namespace Foobooks\Http\Controllers;

use Illuminate\Http\Request;
use Foobooks\Http\Requests;
use Foobooks\Http\Controllers\Controller;



class SuperheroUserNameGeneratorController extends Controller
{
	 
    public function getIndex()
    {
        //return "Get the number of user names to Generate";
		return view('superherousernamegenerator.index');
    }
	
	public function postIndex(Request $request)
    {
		srand(time(0));
		$data=$request->all();		
		$this->validate($request,['numberOfUsers' => 'required|numeric|max:90|min:1']);
		//dd($request->all());
		$num = $data['numberOfUsers'];
		$tok = $data['_token'];
		$strArray = Array();
		
		$strArray = self::getACoolUserName($num); //"testtitle";
		//$obj = self::getACoolUserName($num);
		//$cus = $data['title'];
		//print_r($strArray);
		
		$list = array('outstring' => '77',
					  'date'	  => date('Y-m-d'));	//self::getACoolUserName($num));
		
		//echo $num;
		//$num=56;
		//echo "<p>".$num."</p>";
		//dd($request->all());
		//$form_array = array();
		//$myarray=self::getACoolUserName($num);			//$data['numberOfUserNames']
        //last $pass = self::getACoolUserName($num);
		//<pre>
		//print_r($myarray);
		//</pre> 
		///////////////////echo $pass;
		//dd($myarray); 
		//last return "Number of users generated: " . $num; //view('superherousernamegenerator.postindex')->with(['data'=>$data]);
		return view('superherousernamegenerator.postindex')->with('numberOfUsers', $num)
														   ->with('_token', $tok)
														   ->with(['username' => $strArray]);
														   //->with($obj, self::getACoolUserName($num));  
    }

	public function getACoolUserName($numberOfUserNames) {
		//$out="";
		$out=array();
		//function make_seed();
		for ($x = 0; $x < $numberOfUserNames; $x++) {
		
		
		$randomNumber = rand(0, 4);
		$superHeroNames = array("Raven", "GreenLantern", "Thing", "Cyclops", "Crow");
		$randomName = $superHeroNames[$randomNumber];
			
		$adverbs = array("Always", "Rarely", "Consistently", "Systematically", "Perfectly");
			$randomNumber = rand(0, 4);
			$adverb = $adverbs[$randomNumber];
			
			$verbs = array("Flies", "Conquers", "Streaks", "Crushes", "Smashes");
			$randomNumber = rand(0, 4);
			$verb = $verbs[$randomNumber];
			
			$number = rand(5, 15);
			//$out = "";
			//$out .= "$randomName$adverb$verb$number";
			array_push($out, "$randomName$adverb$verb$number");
			//last echo "<h3>$randomName$adverb$verb$number</h3>";
			
		}
		return $out;  
	}
	
}
