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
			$table->string('lesson_title')->index();
			$table->string('lesson_slug')->unique();
			$table->text('lesson_body')->nullable();
			$table->text('lesson_excerpt')->nullable();
			$table->timestamps();
			$table->timestamp('lesson_published_at')->nullable();
			$table->tinyInteger('lesson_order')->nullable();

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
