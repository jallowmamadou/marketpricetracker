<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactinfo', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('entity_id')->default(0);
			$table->string('entity_type')->nullable();
		    $table->string('telephone')->nullable();
		    $table->string('email')->nullable();
		    $table->string('address')->nullable();

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
		Schema::drop('contactinfo');
	}

}
