<?php

namespace Foobooks\Http\Controllers;

use Illuminate\Http\Request;
use Foobooks\Http\Requests;
use Foobooks\Http\Controllers\Controller;
use App\Helpers\OutputGeneratorController;

class OutputGeneratorController extends Controller
{
	public function getACoolUserName($numberOfUserNames) {
		for ($x = 0; $x < $numberOfUserNames; $x++) {
		$superHeroNames = array("Raven", "GreenLantern", "Thing", "Cyclops", "Crow");

			$randomNumber = mt_rand(0, 4);
			$randomName = $superHeroNames[$randomNumber];
			
			$adverbs = array("Always", "Rarely", "Consistently", "Systematically", "Perfectly"
			);
			$randomNumber = mt_rand(0, 4);
			$adverb = $adverbs[$randomNumber];
			
			$verbs = array("Flies", "Conquers", "Streaks", "Crushes", "Smashes"
			);
			$randomNumber = mt_rand(0, 4);
			$verb = $verbs[$randomNumber];
			
			$number = mt_rand(5, 15);

			echo "<h3>$randomName$adverb$verb$number</h3>";
		}

	}
	
}
