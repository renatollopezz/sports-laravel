<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	public $timestamps= false;
	protected $fillable = ['name','abreviation'];

	public function match(){
		return $this->hasMany('App\Matches');
	}

	public function competitions(){
		return $this->belongsToMany('App\Competition')->withTimestamps();
	}
}
