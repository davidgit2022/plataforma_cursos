<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ModuleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/users', UserController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/modules', ModuleController::class)->except('create','store');

Route::get('/modules/create/{id}', [ModuleController::class, 'create'])->name('modules.create');

Route::post('/modules/store/{id}', [ModuleController::class, 'store'])->name('modules.store');
