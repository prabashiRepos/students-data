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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', StudentController::class .'@index')->name('students.index');
Route::get('/add-student', StudentController::class .'@studentIndex')->name('students.add-student');
Route::post('/student/create', StudentController::class .'@store')->name('students.store');

