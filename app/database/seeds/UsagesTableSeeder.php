<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsagesTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
		// 	Usage::create([

		// 	]);
		// }

		$usage= new Usage();
		$usage->type = 'shower';
		$usage->gpm = 7;
		$usage->save();

		$usage= new Usage();
		$usage->type = 'faucet';
		$usage->gpm = 3;
		$usage->save();

		$usage= new Usage();
		$usage->type = 'water lawn';
		$usage->gpm = 10;
		$usage->save();

		$usage= new Usage();
		$usage->type = 'bathtub';
		$usage->gpm = 36;
		$usage->save();

		$usage= new Usage();
		$usage->type = 'washing machine';
		$usage->gpm = 50;
		$usage->save();

		$usage= new Usage();
		$usage->type = 'dishwasher';
		$usage->gpm = 15;
		$usage->save();

		$usage= new Usage();
		$usage->type = 'toilet';
		$usage->gpm = 1.6;
		$usage->save();

		$usage= new Usage();
		$usage->type = 'swimming pool';
		$usage->gpm = 10000;
		$usage->save();

		$usage= new Usage();
		$usage->type = 'hot tub';
		$usage->gpm = 475;
		$usage->save();

		$usage= new Usage();
		$usage->type = 'garden hose';
		$usage->gpm = 7;
		$usage->save();

		$usage= new Usage();
		$usage->type = 'pressure washer';
		$usage->gpm = 5;
		$usage->save();
	}

}