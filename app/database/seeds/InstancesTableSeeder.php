<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InstancesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$users = User::all();
		$usage = Usage::all();

		foreach(range(1, 10) as $index)
		{
			Instance::create([
				'user_id'=>$user->id,
				'usage_id'=>$usage->id
			]);
		}
	}

}