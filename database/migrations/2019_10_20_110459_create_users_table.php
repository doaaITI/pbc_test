<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 100);
			$table->integer('type_id')->unsigned();
			$table->integer('club_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}
