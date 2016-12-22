<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Season;

class SeasonsController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $seasons = Season::all();
        return view('seasons.index')->withSeasons($seasons);
    }


    public function create()
    {
       return view('seasons.create');
    }



    public function store(Request $request)
    {

        //falta metodo para validar campo
        $this->validate($request,['name'=> 'bail|required']);

        $input = $request->all();
        Season::create($input);
        return redirect()->route('seasons.index');    }

    public function show($id)
    {
        $season = Season::findOrFail($id);
        return view('seasons.show')->withSeason($season);
    }

    public function edit($id)
    {
        $season = Season::findOrFail($id);
        return view('seasons.edit')->withSeason($season);
    }

    public function update(Request $request, $id)
    {
        $season = Season::findOrFail($id);

        $input = $request->all();
        $season->fill($input)->save();

        return redirect()->route('seasons.index');
    }
    
    public function destroy($id)
    {
        $season = Season::findOrFail($id);
        $season->delete();
        return redirect()->route('seasons.index');
    }
        function delete($id){
        $season = Season::findOrFail($id);
        return view('seasons.delete')->withSeason($season);
    }
}
