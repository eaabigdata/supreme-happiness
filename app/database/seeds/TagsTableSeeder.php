<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder {

	public function run()
	{
		$tag= new Tag();
		$tag->name = 'toilet';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'hose';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'pool';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'hack';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'conserve';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'water';
		$tag->save();

		$tag= new Tag();
		$tag->name = 'salamander habitat';
		$tag->save();

	}

}