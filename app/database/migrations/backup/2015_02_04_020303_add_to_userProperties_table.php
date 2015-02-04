<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddToUserPropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('userProperties', function(Blueprint $table)
		{
			$table->string('filename')->nullable()->after('address_id');
			$table->string('image')->nullable()->after('filename');
			$table->string('thumbnail')->nullable()->after('image');
			$table->string('url')->nullable()->after('thumbnail');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('userProperties', function(Blueprint $table)
		{
			$table->dropColumn('filename');
			$table->dropColumn('image');
			$table->dropColumn('thumbnail');
			$table->dropColumn('url');
		});
	}

}
