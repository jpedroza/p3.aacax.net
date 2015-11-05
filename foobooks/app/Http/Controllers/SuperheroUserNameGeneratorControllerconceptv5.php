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
		$imageArray = self::getRandomUserImage();
		$morf = array_shift($imageArray);
		$c1 = "<h1> what is up!</h1>";
		$c2 = "<h1> what is up!</h1>";
		$c3 = "<h1> what is up!</h1>";
		$c4 = "<h1> what is up!</h1>";
		$c5 = "<h1> what is up!</h1>";
		
		
		
		
		
		
		
		print_r($imageArray);
		
		/*if ($morf == "m") {
			$c1 = array_shift($imageArray); 
			$c2 = array_shift($imageArray); 
			$c3 = array_shift($imageArray); 
			$c4 = array_shift($imageArray); 
			$c5 = array_shift($imageArray); 
		} else {
			$c1 = array_shift($imageArray); 
			$c2 = array_shift($imageArray); 
			$c3 = array_shift($imageArray); 
			$c4 = array_shift($imageArray); 
			$c5 = null;
		}*/
		/*$morf = array_shift($imageArray); 
		if ($morf == "m") {
			$c1 = array_shift($imageArray); 
			$c2 = array_shift($imageArray); 
			$c3 = array_shift($imageArray); 
			$c4 = array_shift($imageArray); 
			$c5 = array_shift($imageArray); 
		} else {
			$c1 = array_shift($imageArray); 
			$c2 = array_shift($imageArray); 
			$c3 = array_shift($imageArray); 
			$c4 = array_shift($imageArray); 
		}
		*/
		
		return view('superherousernamegenerator.postindex')	->with('numberOfUsers', $num)
															->with(['username' => $strArray])
															->with('c1', $c1)			
															->with('c2', $c2)
															->with('c3', $c3)
															->with('c4', $c4)
															->with('c5', $c5);

															//->with(['picture' => $imageArray]);
    }

	public function getACoolUserName($numberOfUserNames) {
		$out=array();
		for ($x = 0; $x < $numberOfUserNames; $x++) {
		$randomNumber = rand(0, 19);
		$superHeroNames = array("Raven", 
								"GreenLantern", 
								"Thing", 
								"Cyclops", 
								"Crow", 
								"Superman", 
								"Spiderman",
								"Batman",
								"Masterchief",
								"Cyborg",
								"Beastboy",
								"HumanTorch",
								"Hawkeye",
								"Hulk",
								"MrFantastic",
								"SilverSurfer",
								"Thor",
								"IronMan",
								"AntMan",
								"CaptainAmerica");
		$randomName = $superHeroNames[$randomNumber];
		$adverbs = array(	"Always", 
							"Rarely", 
							"Consistently", 
							"Systematically", 
							"Perfectly",
							"Occasionaly", 
							"Seldom", 
							"Often", 
							"Sometimes", 
							"Periodically");
			$randomNumber = rand(0, 9);
			$adverb = $adverbs[$randomNumber];
			$verbs = array( "Flies", 
							"Conquers", 
							"Streaks", 
							"Crushes", 
							"Smashes",
							"Cracks",
							"Breaks",
							"Burns",
							"Annihilates",
							"Destroys");
			$randomNumber = rand(0, 9);
			$verb = $verbs[$randomNumber];
			$number = rand(5, 15);
			array_push($out, "$randomName$adverb$verb$number");
		}
		return $out;  
	}
	
	public function getRandomUserImage () {
		$characteristics = array();
		$maleorfemale = mt_rand(1, 2);
		if ($maleorfemale == 1) {
				$char1 = mt_rand(1,5);
				$char2 = mt_rand(1,9);
				$char3 = mt_rand(1,3);
				$char4 = mt_rand(1,3);
				$char5 = mt_rand(1,9);
			array_push($characteristics, "m", $char1, $char2, $char3, $char4, $char5);
		} else {
				$char1 = mt_rand(1,5);
				$char2 = mt_rand(1,9);
				$char3 = mt_rand(1,12);
				$char4 = mt_rand(1,3);
			array_push($characteristics, "f", $char1, $char2, $char3, $char4);
		}
		return $characteristics;
	}
	
}
