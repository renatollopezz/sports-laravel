<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matches;
use App\Team;

class MatchesController extends Controller
{
	    public function __construct()
    {
        $this->middleware('auth');
    }
	
    function index(){
		//buscar dados
		$matches = Matches::all();
		return view('matches.index')->with('matches',$matches);
	} 

	function create(){
		$matches = Matches::all();	
		$teams = Team::all('id','name');	
		return view('matches.create')->with(['teams'=>$teams,'matches'=>$matches]);
	}

	function store(Request $request){
		$input = $request->all();
		Matches::create($input);
		return redirect()->route('matches.index');
	}

	function show($id){
		$matches = Matches::findOrFail($id);
		return view('matches.show')->with('matches',$matches);
	}

	function edit($id){
		$matches = Matches::findOrFail($id);
		return view('matches.edit')->with('matches',$matches);
	}

	function update($id,Request $request){
		$matches = Matches::findOrFail($id);
		$inputs =  $request->all();
		$matches->fill($inputs)->save();
		return redirect()->route('matches.index');
	}

	function delete($id){
		$matches = Matches::findOrFail($id);
		return view('matches.delete')->with('matches',$matches);
	}

	function destroy($id){
		$matches = Matches::findOrFail($id);
		$matches->delete();
		return redirect()->route('matches.index');
	}


}

