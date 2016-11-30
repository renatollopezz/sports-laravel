<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('dashboard');
});
Route::get('/sobre', function () {
    return view('about');
});

	//router Team --
Route::get('teams/delete/{id}','TeamsController@delete');
Route::resource('teams','TeamsController');

	//router Matches
Route::get('matches/delete/{id}','MatchesController@delete');
Route::resource('matches','MatchesController');

  //router Competition
Route::resource('competitions','CompetitionController');
Route::get('competitions/delete/{id}','CompetitionController@delete');
