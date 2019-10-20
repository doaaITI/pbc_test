<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClubsTable extends Migration {

	public function up()
	{
		Schema::create('clubs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('clubs');
	}
}