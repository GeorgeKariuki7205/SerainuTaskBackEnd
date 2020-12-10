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
        $this->call(IndicatorSeeder::class);
        $this->call(CVECThreatIndicatorSeeder::class);
        $this->call(CVECThreatIndicatorDetectedSeeder::class);
        $this->call(CVECThreatIndicatorValidatedSeeder::class);
    }
}
