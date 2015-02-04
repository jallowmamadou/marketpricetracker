<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requests', function(Blueprint $table)
		{
			$table->increments('id');

		    $table->integer('buyer_id',10)->unsigned()->index();
		    $table->integer('quantity',10)->unsigned()->index();
		    $table->integer('product_id',10)->default(0);
		    $table->string('requestMade',150)->nullable();
		    $table->bolean('status')->default(0);

			$table->timestamps();

			$table->foreign('product_id')->references('id')->on('products')->onDelete('restrict')->onUpdate('cascade');
			$table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('restrict')->onUpdate('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('requests');
	}

}
