<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\DoctorController;


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

Route::get("/doctors", "Api\DoctorController@index");
Route::get("/doctors/{doctor}", "Api\DoctorController@show");
Route::get("/search", "Api\DoctorController@search");
Route::get("/advanceSearch", "Api\DoctorsController@advanceSearch");


Route::post('/doctors/review', "Api\ReviewController@store");