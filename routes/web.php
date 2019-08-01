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
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

// funds page functionalities...
Route::get('/funds', 'PagesController@funds');
Route::get('insert', 'FundsInsertController@insertform');
Route::post('create', 'FundsInsertController@insert');

//register_agents page Functionalities...
Route::resource('agents', 'AgentsController');


Route::get('user.index', function(){
    $agent = DB::table('agent')->pluck('id','agent_name','district','password','signature');
    return view('user.index', ['agent' => $agent]);
});

Route::get('user.index', function(){
    $agent = DB::table('agent')->get();
    return view('user.index', ['agent' => $agent]);
});

//Graph stuff...
Route::get('/chart', 'PagesController@chart');
//Route::get('create-chart/{type}', 'ChartController@makeChart');
Route::get('chart', 'ChartController@chart');

