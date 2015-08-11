<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::controllers([
   'password' => 'Auth\PasswordController',
]);
Route::get('/', 'Auth\AuthController@getLogin');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register' , 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/home', ['as' => '/users', 'uses' => 'Admin\UsersController@index']);

$router->group(['middleware' => ['auth','roles'], 'roles' => ['admin']], function() {
    Route::resource('/users','Admin\UsersController');
});

Route::post('/reports/filter','ReportsController@filter'); 
Route::resource('/reports','ReportsController');
