<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\Controller:: class, 'blog'])->name('home');
Route::get('blog',[\App\Http\Controllers\Controller:: class, 'blog'])->name('blog');
Route::get('form',[App\Http\Controllers\Controller:: class, 'create'])->name('create');
Route::post('form',[App\Http\Controllers\Controller:: class, 'store']);


//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
