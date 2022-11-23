<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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

// Route::resource("student",[StudentController::class])->name('student');
// Route::get("Teacher",[TeacherController::class])->name('teacher');


// Route::resource('/', StudentController::class);


Route::resource('/students', StudentController::class);
Route::resource('/teachers', TeacherController::class);
