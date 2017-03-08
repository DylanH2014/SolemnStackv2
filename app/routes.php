<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function() {
	return View::make('login');
});
Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');

Route::group(array('before' => 'auth'), function() { 
  
	Route::get('logout', 'HomeController@doLogout');

	Route::get('homepage', 'HomeController@homepage');

});
