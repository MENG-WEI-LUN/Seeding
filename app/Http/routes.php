<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () 
{
    return view('welcome');
    
});

Route::get('Hot',['as' => 'Hot',function()
	{
		return'that is Hot page';
	}]);

Route::get('All',['as' => 'All',function()
	{
		return'that is All page';
	}]);

Route::get('featured',['as' => 'featured',function()
	{
		return'that is Hot featured';
	}]);

Route::get('random',['as' => 'random',function()
	{
		return'that is Hot random';
	}]);
Route::get('post',['as' => 'post',function()
	{
		return view('post');
	}]);



Route::group(['prefix' => 'post'],function()
{

	Route::get('name',['as' => 'name' ,function()
		{
			return 'that is name page';
		}]);
	Route::get('title',['as' => 'title' ,function()
		{
			return 'that is title page!';
		}]);
	Route::get('fox',['as' => 'author' ,function()
		{
			return 'that is author fox page!';
		}]);
	
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
