<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Team;

class TeamsController extends Controller
{
	function index(){
		//buscar dados
		$teams = Team::all();
		return view('teams.index')->withTeams($teams);
	}    

    function create(){
		return view('teams.create');
	}

	function store(Request $request){
		$input = $request->all();
		Team::create($input);
		return redirect()->route('teams.index');
	} 

	function show($id){
		$team = Team::findOrFail($id);
		return view('teams.show')->withTeam($team);
	}

	function edit($id){
		$team = Team::findOrFail($id);
		return view('teams.edit')->withTeam($team);
	}

	function update($id,Request $request){
		$team = Team::findOrFail($id);

		$input = $request->all();
		$team->fill($input)->save();

		return redirect()->route('teams.index');
	}

	function delete($id){
		$team = Team::findOrFail($id);
		return view('teams.delete')->withTeam($team);
	}

	function destroy ($id){
		$team = Team::findOrFail($id);
		$team->delete();
		return redirect()->route('teams.index');
	}
}
