<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Auth::routes();
Route::middleware(['auth'])->group(function () {
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/create-material',[ProductController::class,'create'])->name('create');
    Route::post('/store-material',[ProductController::class,'store'])->name('store');
    Route::get('/index',[ProductController::class,'index'])->name('index');
    Route::get('/edit.material/{id}',[ProductController::class,'edit'])->name('edit');
    Route::post('/update.material/{id}',[ProductController::class,'update'])->name('update');
    Route::get('/delete.material/{id}',[ProductController::class,'delete'])->name('delete');


});




