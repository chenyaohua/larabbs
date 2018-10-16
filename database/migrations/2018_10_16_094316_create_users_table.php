<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('phone', 191)->nullable()->unique();
			$table->string('email', 191)->nullable()->unique();
			$table->string('password', 191)->nullable();
			$table->string('weixin_openid', 191)->nullable()->unique();
			$table->string('weapp_openid', 191)->nullable()->unique();
			$table->string('weixin_session_key', 191)->nullable();
			$table->string('weixin_unionid', 191)->nullable()->unique();
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->string('avatar', 191)->nullable();
			$table->string('introduction', 191)->nullable();
			$table->integer('notification_count')->unsigned()->default(0);
			$table->dateTime('last_actived_at')->nullable();
			$table->string('registration_id', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
