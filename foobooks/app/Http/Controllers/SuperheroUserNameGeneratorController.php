<?php

namespace Foobooks\Http\Controllers;

use Illuminate\Http\Request;
use Foobooks\Http\Requests;
use Foobooks\Http\Controllers\Controller;
use App\Helpers\OutputGeneratorController;

class SuperheroUserNameGeneratorController extends Controller
{
	 
    public function getIndex()
    {
        //return "Get the number of user names to Generate";
		return view('superherousernamegenerator.index');
    }
	
	public function postIndex(Request $request)
    {
		$data=$request->all();		
		$this->validate($request,['numberOfUsers' => 'required|numeric|max:90|min:1']);
		//dd($request->all());
		$num = $data['numberOfUsers'];
		$tok = $data['_token'];
		
		
		$data["title"] = "testtitle";

		$cus = $data['title'];

		
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
														   ->with('title', $cus); 
    }

	public function getACoolUserName($numberOfUserNames) {
		for ($x = 0; $x < $numberOfUserNames; $x++) {
		$superHeroNames = array("Raven", "GreenLantern", "Thing", "Cyclops", "Crow");

		$randomNumber = mt_rand(0, 4);
		$randomName = $superHeroNames[$randomNumber];
			
		$adverbs = array("Always", "Rarely", "Consistently", "Systematically", "Perfectly");
			$randomNumber = mt_rand(0, 4);
			$adverb = $adverbs[$randomNumber];
			
			$verbs = array("Flies", "Conquers", "Streaks", "Crushes", "Smashes");
			$randomNumber = mt_rand(0, 4);
			$verb = $verbs[$randomNumber];
			
			$number = mt_rand(5, 15);
			//$out = "";
			$out = "<h3>$randomName$adverb$verb$number</h3>";
			//last echo "<h3>$randomName$adverb$verb$number</h3>";
		}
		return $out; 
	}
}
