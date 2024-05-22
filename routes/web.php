<?php

use App\Http\Controllers\CourseClassController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::redirect('/', 'login');

Route::fallback(function () {
    return redirect()->route('dashboard');
});


Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    
    Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
    Route::post('/courses', [CoursesController::class, 'store'])->name('enroll');

    Route::get('/course/{course:id}', [CourseClassController::class, 'index'])->name('course.index');
    Route::post('/course/{course:id}', [CourseClassController::class, 'store'])->name('course.store');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);
