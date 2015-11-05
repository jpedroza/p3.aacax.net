<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//This is the main Welcome function
Route::get('/', function () {
    return view('welcome');
}); 

//These are for Manager Ipsum
Route::get('/manageripsum', 'ManagerIpsumController@getIndex');
Route::post('/manageripsum', 'ManagerIpsumController@postIndex');

//These are for Late Night Power Boost
Route::get('/latenightpowerboost', 'LateNightPowerBoostController@getIndex');
Route::post('/latenightpowerboost', 'LateNightPowerBoostController@postIndex');

//These are for Superhero User Name Generator
Route::get('/superherousernamegenerator', 'SuperheroUserNameGeneratorController@getIndex');
Route::post('/superherousernamegenerator', 'SuperheroUserNameGeneratorController@postIndex');

