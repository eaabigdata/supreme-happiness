<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ReportsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        for($i = 0; $i < 20; $i += 1)
        {
            $report = new Report();

            $report->image_url   = $faker->imageUrl();
            $report->description = $faker->realText(500);
            $report->location_id = Location::all()->random()->id;
            $report->profile_id  = mt_rand(1, 3);
            
            $report->save();
        }
	}

}