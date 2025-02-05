<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider.
|--------------------------------------------------------------------------
*/

// Home Routes
Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('about', [HomeController::class, 'about'])->name('about');
    Route::get('project', [HomeController::class, 'project'])->name('project');
    Route::get('team', [HomeController::class, 'team'])->name('team');
    Route::get('client', [HomeController::class, 'client'])->name('client');
    Route::get('service', [HomeController::class, 'service'])->name('service');
    Route::get('contact', [HomeController::class, 'contact'])->name('contact');
});

// Contact Form Route
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');