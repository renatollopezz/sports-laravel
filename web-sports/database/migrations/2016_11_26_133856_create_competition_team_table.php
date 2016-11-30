<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('competition_team',function(Blueprint $table){
            $table->increments('id');
            $table->integer('competition_id')->unsigned();
            $table->integer('team_id')->unsigned();
            //foreign keys
            $table->foreign('competition_id')->references('id')
                ->on('competitions');
            $table->foreign('team_id')->references('id')
                ->on('teams');

            $table->timestamps();
        });  

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
