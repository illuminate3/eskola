<?php



Route::get('dashboard', 'PagesController@dashboard');

 Route::get('courses', 'CoursesController@index');
 Route::get('courses/create', 'CoursesController@create');
 Route::get('courses/{slug}', 'CoursesController@show');
Route::post('courses', 'CoursesController@store');
Route::get('courses/{slug}/edit', 'CoursesController@edit');
Route::patch('courses/{slug}/update', 'CoursesController@update');

Route::get('lessons', 'LessonsController@index');
Route::get('lessons/create', 'LessonsController@create');
Route::get('lessons/{slug}', 'LessonsController@show');
Route::post('lessons', 'LessonsController@store');
Route::get('lessons/{slug}/edit', 'LessonsController@edit');
Route::patch('lessons/{slug}/update', 'LessonsController@update');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
