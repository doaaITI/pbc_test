<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('type_id')->references('id')->on('types')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('club_id')->references('id')->on('clubs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('services', function(Blueprint $table) {
			$table->foreign('cate_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('categories', function(Blueprint $table) {
			$table->foreign('type_id')->references('id')->on('types')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('user_service', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('user_service', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('services')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_type_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_club_id_foreign');
		});
		Schema::table('services', function(Blueprint $table) {
			$table->dropForeign('services_cate_id_foreign');
		});
		Schema::table('categories', function(Blueprint $table) {
			$table->dropForeign('categories_type_id_foreign');
		});
		Schema::table('user_service', function(Blueprint $table) {
			$table->dropForeign('user_service_user_id_foreign');
		});
		Schema::table('user_service', function(Blueprint $table) {
			$table->dropForeign('user_service_service_id_foreign');
		});
	}
}