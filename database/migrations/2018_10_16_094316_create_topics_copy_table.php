<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopicsCopyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics_copy', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 191)->index('topics_title_index');
			$table->text('body', 65535);
			$table->integer('user_id')->unsigned()->index('topics_user_id_index');
			$table->integer('category_id')->unsigned()->index('topics_category_id_index');
			$table->integer('reply_count')->unsigned()->default(0);
			$table->integer('view_count')->unsigned()->default(0);
			$table->integer('last_reply_user_id')->unsigned()->default(0);
			$table->integer('order')->unsigned()->default(0);
			$table->text('excerpt', 65535);
			$table->string('slug', 191)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('topics_copy');
	}

}
