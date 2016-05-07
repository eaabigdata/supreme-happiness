<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('duration_in_ms')->unsigned();
			$table->float('total_gpm');

			$table->integer('profile_id')->unsigned();
		    $table->foreign('profile_id')->references('id')->on('profiles');
		    $table->integer('usage_id')->unsigned();
		    $table->foreign('usage_id')->references('id')->on('usages');

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
		Schema::drop('instances');
	}

}
