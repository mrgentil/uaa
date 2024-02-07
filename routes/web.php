<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');
Route::get('/involve', [App\Http\Controllers\ImpliquerController::class, 'index'])->name('involve');
Route::get('/partnership', [App\Http\Controllers\PartenariatController::class, 'index'])->name('partnership');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

