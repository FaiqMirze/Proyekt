<?php

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
Route::get('/front/{id}',[\App\Http\Controllers\FrontController::class,'show'])->name('front.show');


//admin
Route::get('admin/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('admin.login');
Route::post('admin/login/post', [\App\Http\Controllers\AuthController::class, 'loginpost'])->name('admin.login.post');


Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function () {
    Route::get('panel', [\App\Http\Controllers\AdminController::class, 'index'])->name('index');
    Route::resource('articles',\App\Http\Controllers\ArticleController::class);
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

});
