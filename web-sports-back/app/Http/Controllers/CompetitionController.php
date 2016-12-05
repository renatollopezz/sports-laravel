<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\Competition;

use App\Team;

class CompetitionController extends Controller
{
    
    public function index(){
      	$competitions = Competition::all();
		return view('competitions.index')->withCompetitions($competitions);

    }
    public function create(){
        $teams= Team::all('id','name');
    	return view('competitions.create')->withTeams($teams);
    }

    public function store(Request $Request){
    	$inputs = $Request->all();
        $object = Competition::create($inputs);
        $collection = collect($object);
        $value = $collection->get('id');
        $idTeams = $inputs['check'];
    foreach ($idTeams as $t ) {   
        DB::table('competition_team')->insert([
            ['competition_id' => $value, 'team_id' => $t]
        ]);
    }
    	return redirect()->route('competitions.index');
    }

    public function show($id){
    	$competition = Competition::findOrFail($id);
    	return view('competitions.show')->withCompetition($competition);

    }

    public function edit($id){
        $competition = Competition::findOrFail($id);
        return view('competitions.edit')->withCompetition($competition);    
    }

    public function update($id,Request $Request){
        $inputs = $Request->all();
        $competition = Competition::findOrFail($id);
        $competition->fill($inputs)->save();

        return redirect()->route('competitions.index');
    }

    public function delete($id){
        $competition = Competition::findOrFail($id);
        return view('competitions.delete')->withCompetition($competition);
    }

    public function destroy($id){
        $competition = Competition::findOrFail($id);
        $competition->delete();
        return redirect()->route('competitions.index');
    }
}
