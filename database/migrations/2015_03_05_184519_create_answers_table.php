<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answers', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('answer_title');
            $table->text('answer_body');
            $table->timestamp('answer_published_at');
            $table->integer('test_id')->unsigned();
            $table->foreign('test_id')->references('id')->on('tests');
            $table->integer('lesson_id')->unsigned();
            $table->foreign('lesson_id')->references('id')->on('lessons');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');

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
		Schema::drop('answers');
	}

}
