<?php

namespace Foobooks\Http\Controllers;

use Illuminate\Http\Request;
use Foobooks\Http\Requests;
use Foobooks\Http\Controllers\Controller;
use App\Helpers\OutputGeneratorController;

class LateNightPowerBoostController extends Controller
{
	public function __construct() {
		$number = mt_rand(1, 11); 
	}

    public function getIndex()
    {
		
		return view('latenightpowerboost.index'); 
    }
	
	public function postIndex(Request $request)
    {
        srand(time(0)); 
		$num = mt_rand(2,11);
		$outstring = "<img src='img/" . $num . ".png' alt='cartoon goes here'>";
		// Get a random cartoon
		return view('latenightpowerboost.postindex')->with('out', $outstring);
    }

}
