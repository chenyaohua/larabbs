<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevisionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('revisions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('revisionable_type', 191);
			$table->integer('revisionable_id');
			$table->integer('user_id')->nullable();
			$table->string('key', 191);
			$table->text('old_value', 65535)->nullable();
			$table->text('new_value', 65535)->nullable();
			$table->timestamps();
			$table->index(['revisionable_id','revisionable_type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('revisions');
	}

}
