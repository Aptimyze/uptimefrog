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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



//Service routers
Route::group(['middleware' => 'auth', 'namespace' => 'Service'], function () {

    //Dashboard route
    Route::get('/', 'DashboardController@index')->name('dashboard');

    //Monitors route
    Route::group(array('prefix' => 'monitors'), function() {
        Route::get('/', 'MonitorController@index')->name('monitor.index');
    });
    
});
