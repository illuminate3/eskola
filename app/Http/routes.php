<?php
Event::listen('illuminate.query', function($query)
{
//var_dump($query);
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*RESTfull routes for CoursesController to CRUD (Create Read Update Delete) */
Route::get('dashboard', 'PagesController@dashboard');
Route::get('courses', 'CoursesController@index');
Route::get('/', 'CoursesController@index');
Route::get('course/{course_slug}/lessons', 'CoursesController@show');
Route::get('courses/create', [
     'as' => 'course.create',
     'uses' => 'CoursesController@create'
 ]);
Route::post('courses', 'CoursesController@store');
Route::get('course/{id}/edit', 'CoursesController@edit');
Route::patch('course/{id}/update', 'CoursesController@update');

/*RESTfull routes for LessonsController to CRUD (Create Read Update Delete) */
Route::get('lessons', 'LessonsController@index');
Route::get('lessons/create', 'LessonsController@create');
Route::get('course/{course_slug}/lesson/{lesson_slug}', ['as' => 'course.lesson.show', 'uses' => 'LessonsController@show']);
Route::post('lessons', 'LessonsController@store');
Route::get('lessons/{id}/edit', 'LessonsController@edit');
Route::patch('lessons/{id}/update', 'LessonsController@update');

/*RESTfull routes for TestsController to CRUD (Create Read Update Delete) */
Route::get('tests', 'TestsController@index');
Route::get('test/create', 'TestsController@create');
Route::get('course/lesson/{lesson_id}/test/{id}', ['as' => 'course.lesson.test.show', 'uses' => 'TestsController@show']);
Route::post('tests', 'TestsController@store');
Route::get('test/{id}/edit', 'TestsController@edit');
Route::patch('test/{id}/update', 'TestsController@update');

/*RESTfull routes for AnswersController to CRUD (Create Read Update Delete) */
Route::get('answers', 'AnswersController@index');
Route::get('course/{course_id}/lesson/{lesson_id}/test/{test_id}/answer/create', 'AnswersController@create');
Route::get('lesson/test/{test_slug}/answer/{id}', ['as' => 'course.lesson.test.answer.show', 'uses' => 'AnswersController@show']);
Route::post('answers', 'AnswersController@store');
Route::get('answer/{id}/edit', 'AnswersController@edit');
Route::patch('answer/{id}/update', 'AnswersController@update');



//
//    //Returns lesson
//Route::get('course/{course_slug}/lesson/{lesson_slug}', function($course_slug, $lesson_slug)
//{
//    $lesson = \App\Lesson::with('course')->whereLessonSlug($lesson_slug)->first();
//    $course = \App\Course::find($lesson->course_id);
//   return view('lessons.show', compact('lesson', 'course'));
//
//});
