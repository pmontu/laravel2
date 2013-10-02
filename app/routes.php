<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/home',function(){
	return View::make('home');

});
Route::get('userslist',function(){
	$users = User::all();
	return $users;
});
Route::get('blogs',function(){
	$blogs = Blog::all();
	return $blogs;
});

Route::get('tests',function(){
	$tests = tests::find(2);
	return $tests->id;
});