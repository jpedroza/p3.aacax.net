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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //return "Get the LateNightPowerBoost";
		
		return view('latenightpowerboost.index');
    }
	
	public function postIndex(Request $request)
    {
        dd($request->all());
		// Get a random cartoon
		return "Process the LateNightPowerBoost";
    }

}
