<?php

use App\Statistic;
use Illuminate\Database\Seeder;

class StatisticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matchId = 1;

        factory(Statistic::class, 25)->states('batting')->create([
            'match_id' => $matchId
        ]);

        factory(Statistic::class, 25)->states('bowling')->create([
            'match_id' => $matchId
        ]);

        $matchId += 1;
    }
}
