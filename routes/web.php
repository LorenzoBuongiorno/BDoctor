<?php

use App\Http\Controllers\DoctorController;
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
    return view('homeVue');
});


Auth::routes();

/* rotta dashboard parte admin */
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

/* rotte DoctorController */
Route::resource("doctors", "DoctorController");

// Route::get('/doctor/show', 'DoctorController@show')->name('doctors.show');
// Route::get('/doctor/edit', 'DoctorController@edit')->name('doctors.edit');
// Route::patch('/doctor/update', 'DoctorController@update')->name('doctors.update');

/* rotte MessageController */
Route::resource("messages", "MessageController");

/* rotte ReviewController */
Route::resource("reviews", "ReviewController");
