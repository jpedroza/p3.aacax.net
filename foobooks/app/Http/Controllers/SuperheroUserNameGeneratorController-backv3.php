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
		$num = $data['numberOfUsers'];
		$tok = $data['_token'];
		$strArray = Array();
		$strArray = self::getACoolUserName($num);
		return view('superherousernamegenerator.postindex')->with('numberOfUsers', $num)														   ->with(['username' => $strArray]);
    }

	public function getACoolUserName($numberOfUserNames) {
		$out=array();
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
			array_push($out, "$randomName$adverb$verb$number");
		}
		return $out;  
	}
	
}
