<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ReportsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $locations = Location::all();

        for($i = 0; $i < 20; $i += 1)
        {
            $report = new Report();

            $report->image_url   = $faker->imageUrl();
            $report->description = $faker->realText(500);
            $report->location_id = $locations->random();
            $report->profile_id  = mt_rand(1, 3);
            
            $report->save();
        }
	}

}