<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RatingsTableSeeder extends Seeder {

	public function run()
	{
		$rating= new Rating();
		$rating->rating = 1;
		$rating->save();

		$rating= new Rating();
		$rating->rating = 2;
		$rating->save();

		$rating= new Rating();
		$rating->rating = 3;
		$rating->save();

		$rating= new Rating();
		$rating->rating = 4;
		$rating->save();

		$rating= new Rating();
		$rating->rating = 5;
		$rating->save();

		$rating= new Rating();
		$rating->rating = 6;
		$rating->save();

		$rating= new Rating();
		$rating->rating = 7;
		$rating->save();

		$rating= new Rating();
		$rating->rating = 8;
		$rating->save();

		$rating= new Rating();
		$rating->rating = 9;
		$rating->save();

		$rating= new Rating();
		$rating->rating = 10;
		$rating->save();
	}

}