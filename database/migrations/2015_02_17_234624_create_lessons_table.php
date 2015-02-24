<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lessons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_id')->unsigned();
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('body')->nullable();
			$table->text('excerpt')->nullable();
			$table->timestamps();
			$table->timestamp('published_at')->nullable();
			$table->tinyInteger('order')->nullable();

			$table->foreign('course_id')
				->references('id')
				->on('courses');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lessons');
	}

}