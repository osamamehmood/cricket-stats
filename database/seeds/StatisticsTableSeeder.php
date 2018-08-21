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
        factory(Statistic::class, 25)->states('batting')->create();
        factory(Statistic::class, 25)->states('bowling')->create();
    }
}
