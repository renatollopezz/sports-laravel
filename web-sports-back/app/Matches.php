<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
class Matches extends Model
{
	protected $fillable = ['id_home','id_away','dt_match','nb_home_score','nb_away_score','cs_status','create_at','update_at'];


	public function home(){
		return $this->belongsTo('App\Team','id_home');

	}

	public function away(){
		return $this->belongsTo('App\Team','id_away');
	}



}
