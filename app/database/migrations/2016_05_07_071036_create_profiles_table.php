<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('about_me')->nullable();
			$table->string('image_url')->nullable()->unique();
			$table->string('facebook_url')->nullable()->unique();
			$table->string('twitter_url')->nullable()->unique();
			$table->string('instagram_url')->nullable()->unique();

			$table->boolean('is_public');
			
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
