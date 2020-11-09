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

// Route::get('/', function () {
//     return view('login');
// })->middleware(['checklogin']);
  
// // Auth::routes();
// Route::prefix('home')->middleware(['checklogin'])->group(function () {
//     Route::get('/', 'HomeController@index');
// });

// -- LANDING
Route::group(['as' => 'landing.', 'middleware' => 'checklogin'], function () {
    $ctrl = 'HomeController@';
    Route::get('/', $ctrl.'index')->name('index'); // BASE URL
    Route::get('/home', $ctrl.'index')->name('home');
});

Route::get('/login', 'LoginController@index');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');