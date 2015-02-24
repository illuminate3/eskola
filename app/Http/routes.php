<?php



Route::get('dashboard', 'PagesController@dashboard');

 Route::get('courses', 'CoursesController@index');
 Route::get('/', 'CoursesController@index');

 Route::get('courses/create', [
     'as' => 'course.create',
     'uses' => 'CoursesController@create'
 ]);
 Route::get('courses/{slug}', 'CoursesController@show');
Route::post('courses', 'CoursesController@store');
Route::get('courses/{id}/edit', 'CoursesController@edit');
Route::patch('courses/{is}/update', 'CoursesController@update');

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
