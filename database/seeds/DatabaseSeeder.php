<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(RoundsTableSeeder::class);
        $this->call(MatchesTableSeeder::class);
        $this->call(StatisticsTableSeeder::class);
    }
}
