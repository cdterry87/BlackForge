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

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return Redirect::to('welcome');
});

Auth::routes();

// Logout route
Route::get('/api/logout', function () {
    Auth::logout();
    return Redirect::to('login');
});

Route::get('/home', 'HomeController@index')->name('home');

// Catch-all routes to route everything back to the home index
Route::get('/{any}', 'HomeController@index')->where('any', '.*');