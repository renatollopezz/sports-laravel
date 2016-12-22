<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\Competition;

use App\Team;

use App\Season;
class CompetitionController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
      	$competitions = Competition::all();
		return view('competitions.index')->withCompetitions($competitions);

    }
    public function create(){
        $teams= Team::all('id','name');
        $seasons = Season::all('id','name');
    	return view('competitions.create',compact(['teams','seasons']));
    }

    public function store(Request $Request){
    	$inputs = $Request->all();
        $object = Competition::create($inputs);
        $idTeams = $inputs['check'];
        $object->teams()->sync($idTeams);
    	return redirect()->route('competitions.index');
    }

    public function show($id){
    	$competition = Competition::findOrFail($id);
    	return view('competitions.show')->withCompetition($competition);

    }

    public function edit($id){
        $competition = Competition::findOrFail($id);
        $teams = Team::all('id','name');
        $seasons = Season::all('id','name');
        return view('competitions.edit')->with(['competition'=>$competition,'teams'=>$teams,'seasons'=>$seasons12]);
    }

    public function update($id,Request $Request){
        $inputs = $Request->all();
       
        $competition = Competition::findOrFail($id);
        $object = $competition->fill($inputs)->save();
        $idTeams = $inputs['check'];
        $object->teams()->detach($idTeams);
        return redirect()->route('competitions.index');
    }

    public function delete($id){
        $competition = Competition::findOrFail($id);
        return view('competitions.delete')->withCompetition($competition);
    }

    public function destroy($id){
        $competition = Competition::findOrFail($id);
        $competition->teams()->detach();
        $competition->delete();
        return redirect()->route('competitions.index');
    }
}
