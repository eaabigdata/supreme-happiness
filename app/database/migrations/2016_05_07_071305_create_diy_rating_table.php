<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiyRatingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diy_rating', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('diy_id')->unsigned()->index();
			$table->foreign('diy_id')->references('id')->on('diys')->onDelete('cascade');
			$table->integer('rating_id')->unsigned()->index();
			$table->foreign('rating_id')->references('id')->on('ratings')->onDelete('cascade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('diy_rating');
	}

}
