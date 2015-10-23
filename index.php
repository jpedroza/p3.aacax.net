<!DOCTYPE html>
<html>
<body>

<?php
function getACoolUserName($numberOfUserNames) 
	{
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
	
			//echo "<h3>User Name " . $x . " is " . $randomName . $adverbsOfTime . $verbs . $number . "</h3>";
			//echo "Hello";
			echo "<h3>$randomName$adverb$verb$number</h3>";
		}
}

function getNumberOfParagraphs($numberOfParagraphs = 3, $numberOfSentences = 20) {
	for ($x = 0; $x < $numberOfParagraphs; $x++) {
		getProgramManagerJargonIpsum(20);	
	}
}

function getProgramManagerJargonIpsum($numberOfSentences = 20) {

				$outputParagraph = "<p>";
				for ($x = 0; $x < $numberOfSentences; $x++) {
					
					$meetingPhrases = array("The System is seamless to the Tactical Edge.", 
											"Dynamic and Flexible, the robust functionality is to be admired.", 
											"The package ships with Ad-Hoc Configuration Controls.", 
											"Once again, do not go directly to HR.",
											"This reminds me of my old IBM days.",
											"Always remember, the architecture is based on a Self-Healing network.", 
											"The Team needs to be more effective and efficient.",
											"If in doubt, just multi-task and things just work out.",
											"We are not reducing the workforce, we are Right-Sizing.",
											"Wrap your mind around this when things slow down.",
											"I need to step out this afternoon for a very important meeting.",
											"Remember, this is a Team Keurig, so treat it with Respect.",
											"People, I don't make this stuff up - ask anyone I talk to.",
											"I am happy to announce that we are rebooting the effort.",
											"It is not complicated, it is a symbolic paradigm shift.",
											"Has anyone seen Bill today?",
											"Just type faster, and things get done quicker.",
											"Has anyone seen my iPhone around the break area.",
											"We are the more Secure Network sometimes.",
											"Why spend on Security, we got tons of firewalls and ACLs.",
											"The project is on glide path for deployment.",
											"Think of this place like Apple, with just a few less perks.",
											"HR assures me that we don't need to hire 10 more: we just need to multi-task better.",
											"Can you imagine an ISO process system from end to end?",
											"I am telling you, I can't just make this stuff up.",
											"The Project is On Target and under budget.");
					$randomNumber = mt_rand(0, 25);
					$outputParagraph = $outputParagraph . $meetingPhrases[$randomNumber] . " ";
				}
				
				echo "$outputParagraph</p>";

}	

	
getNumberOfParagraphs(3, 20);	
getACoolUserName(10);	



?>

</body>
</html>