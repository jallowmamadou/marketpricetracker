<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResponseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('responses', function(Blueprint $table)
		{
			$table->increments('id');

		    $table->decimal('totalPrice',28, 3)->default(0);
		    $table->integer('quantity')->default(0);
		    $table->boolean('status')->default(0);
		    $table->datetime('respondDate');

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
		Schema::drop('responses');
	}

}
