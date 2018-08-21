<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('match_id')->unsigned()->index();
            $table->string('type')->default('batting'); // Can also be bowling

            // Batting
            $table->integer('number_of_runs')->nullable();
            $table->integer('number_of_bowls_faced')->nullable();
            $table->integer('number_of_4s')->nullable();
            $table->integer('number_of_6s')->nullable();
            // $table->double('strike_rate'); // Calculation: runs / bowls_faced * 100

            // Bowling
            $table->integer('overs_bowled')->nullable();
            $table->integer('maiden_overs')->nullable();
            $table->integer('runs_conceded')->nullable();
            $table->integer('wickets_taken')->nullable();
            // $table->double('economy')->nullable(); // Calculation: runs_conceded / overs_bowled
            $table->integer('wides_bowled')->nullable();
            $table->integer('no_balls_bowled')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistics');
    }
}
