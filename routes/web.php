<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\HomeController;
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/consultation', [HomeController::class, 'consultation']);
Route::get('/building', [HomeController::class, 'building']);
Route::get('/renovation', [HomeController::class, 'renovation']);
Route::get('/interior', [HomeController::class, 'interior']);
Route::get('/contact', [HomeController::class, 'contact']);

