<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foobooks\Requests;
use Foobooks\Http\Controllers\Controller;
use App\Helpers\OutputGeneratorController;

class ManagerIpsumController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex() {
		return view('managerIpsum.index');
    }
	
	public function postIndex(Request $request){
			$this->validate($request,[
			'hmp' => 'required|numeric|max:90|min:1',
			'hmspp' => 'required|numeric|max:20|min:1'
		]);

		$data=$request->all();
		$hmspp = $data['hmspp'];
		$hmp = $data['hmp'];
		$flat = self::getParagraphs($hmp,$hmspp);
		
		return view('managerIpsum.postindex')->with(['paragraphs' => $flat])	
											 ->with(['howmanyparagraphs' => $hmp]);
    } 
	
	public function getParagraphs ($howmanyparagraphs, $howmanyphrasesperparagraphs) {
		$alloutput = array();//"startTag");
		for ($x = 0; $x < $howmanyparagraphs; $x++) {
			array_push($alloutput, "startTag");
			$innerloop = self::getProgramManagerJargonIpsum($howmanyphrasesperparagraphs);
			array_push($alloutput, $innerloop);
			array_push($alloutput, "endTag");
		}
		return $alloutput;
	}
	
	public function getProgramManagerJargonIpsum($numberOfSentences = 20) {
		$outputParagraph = array();
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
									"Has anyone seen my iPhone around the break area?",
									"We are the more Secure Network sometimes.",
									"Why spend on Security, we got tons of firewalls and ACLs.",
									"The project is on glide path for deployment.",
									"Think of this place like Apple, with just a few less perks.",
									"HR assures me that we don't need to hire 10 more: we just need to multi-task better.",
									"Can you imagine an ISO process system from end to end?",
									"I am telling you, I can't just make this stuff up.",
									"The Project is On Target and under budget.");

			for ($x = 0; $x < $numberOfSentences; $x++) {
					
				shuffle($meetingPhrases);

				$randomPhrase = array_pop($meetingPhrases);
					
				array_push($outputParagraph, $randomPhrase);
			}
			 
			$outputText = implode(" ", $outputParagraph); 

			return $outputText;
 
	}


}
