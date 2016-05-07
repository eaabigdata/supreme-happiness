<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder {

	public function run()
	{
		$tag= new Tag();
		$tag->tag = 'toilet';
		$tag->save();

		$tag= new Tag();
		$tag->tag = 'hose';
		$tag->save();

		$tag= new Tag();
		$tag->tag = 'pool';
		$tag->save();

		$tag= new Tag();
		$tag->tag = 'hack';
		$tag->save();

		$tag= new Tag();
		$tag->tag = 'conserve';
		$tag->save();

		$tag= new Tag();
		$tag->tag = 'water';
		$tag->save();

		$tag= new Tag();
		$tag->tag = 'salamander habitat';
		$tag->save();

	}

}