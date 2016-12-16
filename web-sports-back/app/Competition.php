<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{	
	protected $fillable = ['name','initial_date','final_date','season_id'];

	public function teams(){
		return $this->belongsToMany('App\Team')->withTimestamps();
	}

	public function season(){
		return $this->belongsTo('App\Season');
	}
}
