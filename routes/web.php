<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\Route;


Route::match(['GET', 'POST'], '/', [LoginController::class, 'login'])->name('login');
Route::prefix('/')->name('admin.')->middleware('auth')->group(function () {
    Route::get('index', [DashbordController::class, 'index'])->name('index');
    Route::prefix('class')->name('class.')->group(function () {
        Route::get('/index', [ClassController::class, 'index'])->name('index');
        Route::match(['GET', "POST"], '/add', [ClassController::class, 'add'])->name('add');
        Route::match(['GET', "POST"], '/edit/{class_id}', [ClassController::class, 'edit'])->name('edit');
        Route::match(['GET', "POST"], '/del/{class_id}', [ClassController::class, 'del'])->name('del');
    });
    Route::prefix('section')->name('section.')->group(function () {
        Route::get('/index', [SectionController::class, 'index'])->name('index');
        Route::match(['GET', "POST"], '/add', [ClassController::class, 'add'])->name('add');
        Route::match(['GET', "POST"], '/edit/{section_id}', [ClassController::class, 'edit'])->name('edit');
        Route::match(['GET', "POST"], '/del/{section_id}', [ClassController::class, 'del'])->name('del');
    });
    Route::prefix('student')->name('student.')->group(function () {
        Route::get('/index', [StudentController::class, 'index'])->name('index');
        Route::match(['GET', "POST"], '/add', [StudentController::class, 'add'])->name('add');
        Route::match(['GET', "POST"], '/edit/{student_id}', [StudentController::class, 'edit'])->name('edit');
        Route::match(['GET', "POST"], '/del/{student_id}', [StudentController::class, 'del'])->name('del');
    });
});
