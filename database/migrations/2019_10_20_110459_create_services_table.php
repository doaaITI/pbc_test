<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	public function up()
	{
		Schema::create('services', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');

            $table->integer('cate_id')->unsigned();
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}
