<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'index']);
Route::get('/jasa/{name}', [ProductsController::class, 'index']);
Route::get('/berita/{news}', [NewsController::class, 'index']);
Route::get('/program/{program}', [ProgramController::class, 'index']);
Route::resource('/contact-us', ContactController::class);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/collage', [CollegeController::class, 'index']);