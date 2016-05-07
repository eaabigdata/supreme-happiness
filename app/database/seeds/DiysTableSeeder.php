<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DiysTableSeeder extends Seeder {

	public function run()

	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Diy::create([
				'title'   => $faker->sentence,
				'content' => $faker->text,
				'user_id' => User::orderByRaw('RAND()')->first()->id
			]);
		}
	}

}