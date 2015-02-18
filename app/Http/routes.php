<?php



Route::get('dashboard', 'PagesController@dashboard');

 Route::get('courses', 'CoursesController@index');
 Route::get('courses/create', 'CoursesController@create');
 Route::get('courses/{slug}', 'CoursesController@show');
Route::post('courses', 'CoursesController@store');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
