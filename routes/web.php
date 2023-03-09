<?php

use Illuminate\Support\Facades\Route;
// 新增
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HotelController;

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

Route::get('/sss', function () {
    dd("123123123");
})->name("123");

// 自義定
// resource放下面
// http://localhost/student_excel

//StudentController
Route::get('student_excel', [StudentController::class,'excel'])->name('excel');
Route::get('student_child', [StudentController::class,'childPage']);
Route::get('student/bbb', [StudentController::class,'ccc'])->name('aaa');

Route::resource('student', StudentController::class);

//HotelController
Route::get('f1', [HotelController::class,'f1'])->name('hotels.1');
Route::get('f2', [HotelController::class,'f2'])->name('hotels.2');
Route::get('f3', [HotelController::class,'f3'])->name('hotels.3');