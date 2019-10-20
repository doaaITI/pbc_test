<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration {

	public function up()
	{
		Schema::create('admins', function(Blueprint $table) {
			$table->increments('id');

			$table->string('name', 150)->default('none');
            $table->string('email')->unique();

		 	$table->string('password', 100);
            $table->text('remember_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('admins');
	}
}
