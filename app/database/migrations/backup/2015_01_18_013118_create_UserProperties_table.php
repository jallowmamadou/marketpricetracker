<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserPropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userProperties', function(Blueprint $table)
		{
			$table->increments('id');


			$table->integer('user_id')->unsigned()->index();

			$table->foreign('user_id')
		      ->references('id')->on('users')->onUpdate('cascade');


			$table->integer('role_id')->unsigned()->index();

			$table->foreign('role_id')
		      ->references('id')->on('userRoles')->onUpdate('cascade');



			$table->integer('contact_id')->unsigned()->index();

			$table->foreign('catact_id')
		      ->references('id')->on('contactinfo')->onUpdate('cascade');


			$table->integer('person_id')->unsigned()->index();

			$table->foreign('person_id')
		      ->references('id')->on('persons');

			$table->integer('address_id')->unsigned()->index();

			$table->foreign('address_id')
		      ->references('id')->on('addresses');


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
		Schema::drop('userProperties');
	}

}
