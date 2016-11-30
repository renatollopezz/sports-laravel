<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{	
	protected $fillable = ['name','initial_date','final_date'];

	public function teams(){
		return $this->belongsToMany('App\Team')->withTimestamps();
	}
}
