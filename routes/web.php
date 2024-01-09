<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::controller(Controllers\HomeController::class)->group(function(){
    Route::get('/', 'Index')->name('home');
});

Route::controller(Controllers\AuthController::class)->group(function(){
    Route::get('/login', 'Index')->name('auth.index');
    Route::post('/login', 'Login')->name('auth.login');
});

Route::view('/experiences', 'experiences/index')->name('experiences.index');
Route::view('/knowledges', 'knowledges/index')->name('knowledges.index');