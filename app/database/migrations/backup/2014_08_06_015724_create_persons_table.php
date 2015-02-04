<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fname')->nullable();
			$table->string('mname')->nullable();
			$table->string('lname')->nullable();
			$table->string('type')->nullable();
			$table->datetime('DOB')->nullable();
			$table->string('gender')->nullable();
			$table->string('nationality')->nullable();
			$table->string('ethnicity')->nullable();
			$table->string('standing')->nullable();
			$table->string('NIN')->nullable();
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
		Schema::drop('persons');
	}

}
