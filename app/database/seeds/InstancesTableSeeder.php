<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InstancesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Instance::create([
				'duration_in_ms' => $faker->numberBetween(1000, 1500),
				'total_gpm'		 => $faker->numberBetween(10, 100),
				'profile_id'  => Profile::all()->random()->id,
				'usage_id' => Usage::all()->random()->id
			]);
		}
	}

}