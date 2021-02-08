<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/homes',[HomeController::class,'homes']);

Route::post('/homes',[HomeController::class,'inserData']);

Route::get('/logins',[HomeController::class,'logins']);

Route::post('/logins',[HomeController::class,'displayData']);

Route::get('/prod',[HomeController::class,'prod']);

Route::post('/prod',[HomeController::class,'insertData']);

Route::get('/process',[HomeController::class,'process']);

Route::post('/process',[HomeController::class,'insertData']);

Route::get('/delete',[HomeController::class,'delete']);

