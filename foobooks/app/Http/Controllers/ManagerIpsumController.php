<?php

namespace Foobooks\Http\Controllers;

use Illuminate\Http\Request;
use Foobooks\Http\Requests;
use Foobooks\Http\Controllers\Controller;
use App\Helpers\OutputGeneratorController;

class ManagerIpsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //return "Get the Manager Ipsum";
		return view('manageripsum.index');
    }
	
	public function postIndex(Request $request)
    {
			//dd($request->all());
			$this->validate($request,[
				'hmp' => 'required|numeric|max:90|min:1',
				'hmspp' => 'required|numeric|max:20|min:1'
			]);
		return "Process the Manager Ipsum";
    }

}
