<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tests', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('lesson_id')->unsigned();
			$table->string('slug')->unique();
			$table->string('title');
			$table->text('body')->nullable();
			$table->timestamps();
			$table->timestamp('published_at');

			$table->foreign('lesson_id')
				->references('id')
				->on('lessons');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tests');
	}

}
