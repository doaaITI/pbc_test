<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserServiceTable extends Migration {

	public function up()
	{
		Schema::create('user_service', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->integer('service_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('user_service');
	}
}