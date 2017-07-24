<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	//test dump and die function
	/*echo '<pre>';
    $user = users::where('id', '=', 1);
    var_dump($user->toArray()); // <---- or toJson()
    echo '</pre>';*/
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
