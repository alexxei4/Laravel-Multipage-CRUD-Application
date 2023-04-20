<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('/search',[StudentController::class,'search'])->name('students.search');
Route::resource('students','App\HTTP\Controllers\StudentController');
Route::resource("/student", StudentController::class);
Route::get('/',[StudentController::class,'home'])->name('students.home');
Route::get('/about',[StudentController::class,'about'])->name('students.about');
