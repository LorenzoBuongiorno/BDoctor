<?php

use Illuminate\Support\Facades\Auth;
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

/* rotta prima pagina home */
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

/* rotta dashboard parte admin */
Route::get('/home', 'HomeController@index')->name('home');

/* rotte DoctorController */
Route::resource("doctors", "DoctorController");

/* rotte MessageController */
Route::resource("messages", "MessageController");

/* rotte ReviewController */
Route::resource("reviews", "ReviewController");
