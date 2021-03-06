<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['checkSession']],function(){
    Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/', 'App\Http\Controllers\DashboardController@index');
    Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
});

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('login', 'App\Http\Controllers\AuthController@login')->name('login.submit');