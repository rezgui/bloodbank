<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 15)->unique();
			$table->integer('governorate_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('cities');
	}
}