<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminStaff extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_staff', function($table){
			$table->increments('id');
			$table->string('fullname', 50)->nullable();
			$table->string('email',50)->nullable();
			$table->string('password', 50)->nullable();
			$table->string('contactno',50)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin_staff');
	}

}
