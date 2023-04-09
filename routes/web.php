<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HobiLagiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KeluargaLagiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Models\KeluargaLagi;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('logout', [LoginController::class, 'logout']);
Route::middleware(['auth'])->group(function(){
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
    Route::get('/article', [ArticleController::class, 'index']);
    Route::get('/hobi', [HobiLagiController::class, 'index']);
    Route::get('/keluarga', [KeluargaController::class, 'index']);
    Route::get('/matkul', [MataKuliahController::class, 'index']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::resource('/hobis', HobiController::class);
    Route::resource('/keluargalagi', KeluargaLagiController::class);
});


