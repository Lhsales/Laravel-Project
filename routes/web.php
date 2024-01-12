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
    Route::get('/experiences', 'Experiences')->name('experiences.index');
    Route::get('/knowledges', 'Knowledges')->name('knowledges.index');
});

Route::controller(Controllers\AuthController::class)->group(function(){
    Route::get('/login', 'Index')->name('auth.index');
    Route::post('/login', 'Login')->name('auth.login');
    Route::get('/logout', 'Logout')->name('auth.logout');
});

Route::controller(Controllers\AdminController::class)->middleware(['auth'])->group(function(){
    Route::get('/admin', 'Index')->name('admin.index');
});

Route::controller(Controllers\LanguageController::class)->middleware(['auth'])->group(function(){
    Route::get('/admin/languages', 'Index')->name('admin.languages.index');
    Route::get('/admin/languages/types', 'Types')->name('admin.languages.types.index');
    Route::get('/admin/languages/types/create', 'CreateType')->name('admin.languages.types.create');
    Route::post('/admin/languages/types/save', 'SaveType')->name('admin.languages.types.save');
    Route::get('/admin/languages/types/edit/{id}', 'EditType')->name('admin.languages.types.edit');
    Route::post('/admin/languages/types/update/{id}', 'UpdateType')->name('admin.languages.types.update');
});

Route::view('/admin/experiences', 'experiences.index')->name('admin.experiences.index');

Route::view('/admin/scholarity', 'scholarity.index')->name('admin.scholarity.index');
Route::view('/admin/scholarity/types', 'scholarity.types.index')->name('admin.scholarity.types.index');
Route::view('/admin/scholarity/types/2', 'scholarity.types.index')->name('admin.scholarity.types.index');