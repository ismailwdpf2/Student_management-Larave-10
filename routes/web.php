<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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
    return view('Admin.layout');
});
// Route::resource('/student', StudentController::class);
Route::resources([
    'student'=> StudentController::class
]);
Route::resources([
    'teacher'=> TeacherController::class
]);
Route::resources([
    'course'=> CourseController::class
]);
Route::resources([
    'batch'=> BatchController::class
]);
