<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
use App\Http\Controllers\StudentController;

Route::get('add_new', [StudentController::class, 'index']);
Route::post('save', [StudentController::class, 'save'])->name('student.save');


Route::get('/', function () {
    return view('welcome');
});
