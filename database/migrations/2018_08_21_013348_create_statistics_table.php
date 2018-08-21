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
            $table->string('type')->default('batting'); // Can also be bowling
            // Batting
            $table->integer('number_of_runs');
            $table->integer('number_of_bowls_faced');
            $table->integer('number_of_4s');
            $table->integer('number_of_6s');
            $table->double('strike_rate');

            // Bowling
            $table->integer('overs_bowled');
            $table->integer('maiden_overs');
            $table->integer('runs_conceded');
            $table->integer('wickets_taken');
            $table->double('economy');
            $table->integer('wides_bowled');
            $table->integer('no_balls_bowled');

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
        Schema::dropIfExists('statistics');
    }
}
