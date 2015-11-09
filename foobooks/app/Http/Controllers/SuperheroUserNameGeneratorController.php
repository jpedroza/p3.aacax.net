<?php
namespace Foobooks\Http\Controllers;
use Illuminate\Http\Request;
use Foobooks\Http\Requests;
use Foobooks\Http\Controllers\Controller;

class SuperheroUserNameGeneratorController extends Controller
{
    public function getIndex()
    {
		return view('superheroUserNameGenerator.index');
    }
	
	public function postIndex(Request $request)
    {
		srand(time(0));
		$data=$request->all();		
		$this->validate($request,['numberOfUsers' => 'required|numeric|max:90|min:1']);
		$num = $data['numberOfUsers'];
		$tok = $data['_token'];
		$outstring = "";
		for ($x = 0; $x < $num; $x++) {
			$outstring .=
				"<li class='user'>
					<ul>
						<li class='unli'><h1 style='text-decoration: underline;'>" . self::getACoolUserName() . "</h1></li>
						<li class='unli'><h1>Birth Date: " . self::getBirthdate() . "</h1></li>
						<li class='unli'>" . self::getRandomUserImage () . "</li>
					</ul>
					
				</li>";
		} 
		
		return view('superheroUserNameGenerator.postindex')	->with('numberOfUsers', $num)
															->with('outstring', $outstring);
    }

	public function getACoolUserName() {
		$out = "";
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
							"Occasionally", 
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
			$out = "<h2>$randomName$adverb$verb$number</h2>";
		return $out;  
	}
	
	public function getRandomUserImage () {
		$images="";
		$maleorfemale = mt_rand(1, 2);
		if ($maleorfemale == 1) {
				$char1 = mt_rand(1,5);
				$char2 = mt_rand(1,9);
				$char3 = mt_rand(1,3);
				$char4 = mt_rand(1,3);
				$char5 = mt_rand(1,9);
				
				$images = "<img class='face' src='img/back$char1.png' width='15%' height='15%'>
				<img class='face' src='img/m-hair-$char2.png' width='15%' height='15%'>
				<img class='face' src='img/m-nose-$char3.png' width='15%' height='15%'>
				<img class='face' src='img/m-mouth-$char4.png' width='15%' height='15%'>
				<img class='face' src='img/m-eyes-$char5.png' width='15%' height='15%'>";
			
		} else {
				$char1 = mt_rand(1,5);
				$char2 = mt_rand(1,9); 
				$char3 = mt_rand(1,12);
				$char4 = mt_rand(1,3);
				
				$images = "<img class='face' src='img/back$char1.png' width='15%' height='15%'>
				<img class='face' src='img/f-eyesnose-$char2.png' width='15%' height='15%'>
				<img class='face' src='img/f-hair-$char3.png' width='15%' height='15%'>
				<img class='face' src='img/f-mouth-$char4.png' width='15%' height='15%'>";
			
		}
		return $images;
	}
	
	public function getBirthdate () {
		$bdate = "";
		$month = mt_rand(1,12);
		$day = mt_rand(1,30);
		$year = mt_rand(1969,1996);
		$bdate = $month . "/" . $day . "/" . $year; 
		return $bdate;
	}
	
}
