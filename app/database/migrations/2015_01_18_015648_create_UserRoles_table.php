<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('UserRoles', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('user_id')->unsigned()->index();
			$table->integer('seller_id')->unsigned()->index();
			
		    $table->string('url')->nullable();
		    $table->string('userType',60)->nullable();
			$table->timestamps();

			// foreign key constrains

			$table->foreign('user_id')
		      ->references('id')->on('users')->onDelete('restrict');


			$table->foreign('seller_id')
		      ->references('id')->on('sellers')->onDelete('restrict');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('UserRoles');
	}

}
