<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

//front
Route::get('/fronts',[\App\Http\Controllers\FrontController::class,'index'])->name('front.index');
//Route::get('/front/{id}',[\App\Http\Controllers\FrontController::class,'show'])->name('front.show');
Route::get('kategori/{category}', [FrontController::class, 'category'])->name('front.category');
Route::get('/front/{slug}',[\App\Http\Controllers\FrontController::class,'show'])->name('front.show');
Route::get('fronts/about',[\App\Http\Controllers\FrontController::class,'about'])->name('front.about');
Route::get('fronts/contact',[\App\Http\Controllers\FrontController::class,'contact'])->name('front.contact');
Route::post('fronts/send',[\App\Http\Controllers\FrontController::class,'send'])->name('front.send');
Route::get('fronts/vakansia',[\App\Http\Controllers\FrontController::class,'vakansia'])->name('front.vakansia');


//admin
Route::get('admin/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('admin.login');
Route::post('admin/login/post', [\App\Http\Controllers\AuthController::class, 'loginpost'])->name('admin.login.post');
Route::get('admin/register',[\App\Http\Controllers\AuthController::class,'showRegisterForm'])->name('admin.register');
Route::post('admin/register/post',[\App\Http\Controllers\AuthController::class,'register'])->name('admin.register.post');




Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function () {
    Route::get('panel', [\App\Http\Controllers\AdminController::class, 'index'])->name('index');
    Route::resource('articles',\App\Http\Controllers\ArticleController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('users',UserController::class);
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

});
