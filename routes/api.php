<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\MessageController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/doctors', function (Request $request) {
//     return $request->user();
// });

// Route::get("/doctors", "Api\DoctorController@index");
// Route::get("/doctors/{doctor}", "Api\DoctorController@show");
// Route::get("/search", "Api\DoctorController@search");
// Route::get("/advanceSearch", "Api\DoctorsController@advanceSearch");
// Route::get("/messagetest", "Api\MessageController@show");
// Route::middleware('api')->group(function () {
//     Route::resource('messages', 'MessageController');
// });


Route::resource('message', 'Api\messageController');
Route::resource('doctor', 'Api\DoctorController');
Route::resource('review', 'Api\ReviewController');
Route::resource('specialization', 'Api\SpecializationController');