<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diys', function(Blueprint $table)
		{
			$table->timestamps();
			$table->string('title');
			$table->text('content');
			
			$table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
			
			$table->increments('id');
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
		Schema::drop('diys');
	}

}
