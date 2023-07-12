<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EmployeeController;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');

