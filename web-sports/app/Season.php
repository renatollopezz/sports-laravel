<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable =['name'];
    // add $table pois tabela no banco foi criada no singular, e como padrao o migrate deve ter as tabelas no plural
    protected $table = 'season';

   public function competitions(){
    	return $this->hasMany('App/Competition');
    }
}
