<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TimetableController;

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

Route::get('/test', function () {
    return view('test');
});

Route::get("/",[TimetableController::class,'getTimetable']);
Route::get('addtimetable',[TimetableController::class,'add'])->name('addtimetable');
Route::get('/get_sub/{id}',[TimetableController::class,'get_sub']);
Route::post('posttimetable',[TimetableController::class,'addTimeT']);
