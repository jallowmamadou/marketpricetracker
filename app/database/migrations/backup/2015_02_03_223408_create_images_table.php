<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('product_id')->default(0);

		    $table->string('title',150)->nullable();
		    $table->string('thumbnail')->nullable();
		    $table->string('filename')->nullable();
		    $table->string('path')->nullable();
		    $table->string('directory')->nullable();
		    $table->string('filetype')->nullable();
		    $table->string('extension')->nullable();		    

			$table->softDeletes();

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
		Schema::drop('images');
	}

}
