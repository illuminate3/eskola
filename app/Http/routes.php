<?php
Event::listen('illuminate.query', function($query)
{
var_dump($query);
});

Route::get('dashboard', 'PagesController@dashboard');

Route::get('courses', 'CoursesController@index');

Route::get('/', 'CoursesController@index');

Route::get('course/{course_slug}/lessons', 'CoursesController@show');

Route::get('courses/create', [
     'as' => 'course.create',
     'uses' => 'CoursesController@create'
 ]);

Route::post('courses', 'CoursesController@store');
Route::get('courses/{course_id}/edit', 'CoursesController@edit');
Route::patch('courses/{course_id}/update', 'CoursesController@update');

Route::get('lessons', 'LessonsController@index');
Route::get('lessons/create', 'LessonsController@create');
Route::get('lessons/{slug}', 'LessonsController@show');
Route::post('lessons', 'LessonsController@store');
Route::get('lessons/{id}/edit', 'LessonsController@edit');
Route::patch('lessons/{id}/update', 'LessonsController@update');

Route::get('tests', 'TestsController@index');
Route::get('tests/create', 'TestsController@create');
Route::get('tests/{id}', 'TestsController@show');
Route::post('tests', 'TestsController@store');
Route::get('tests/{id}/edit', 'TestsController@edit');
Route::patch('tests/{id}/update', 'TestsController@update');

Route::get('tes', 'LessonsController@showLessonTest');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('course/{course_slug}/lesson/{lesson_slug}', ['as' => 'course.lesson.show', 'uses' => 'LessonsController@show']);


//
//    //Returns lesson
//Route::get('course/{course_slug}/lesson/{lesson_slug}', function($course_slug, $lesson_slug)
//{
//    $lesson = \App\Lesson::with('course')->whereLessonSlug($lesson_slug)->first();
//    $course = \App\Course::find($lesson->course_id);
//   return view('lessons.show', compact('lesson', 'course'));
//
//});


    //Returns all lessons for specific course!
Route::get('1', function()
{
    $course = \App\Course::find(2);

    return $course->test;
});