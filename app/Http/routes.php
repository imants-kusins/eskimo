<?php




Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::post('create-user', 'VisitorController@create');
Route::get('delete-visitor/{id}', 'VisitorController@delete');
Route::get('download-csv', 'VisitorController@downloadCsv');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
