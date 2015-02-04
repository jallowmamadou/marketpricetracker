<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('seller_id')->unsigned()->index();

		    $table->string('name',150)->nullable();
		    $table->integer('quantity')->default(0);
		    $table->decimal('unitPrice',28,3);
		    $table->string('productType')->nullable();
		    

			$table->softDeletes();
			$table->timestamps();

			//foreign key constrain

			$table->foreign('seller_id')->references('id')->on('sellers');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
