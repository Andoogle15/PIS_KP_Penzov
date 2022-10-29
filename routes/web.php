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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', [App\Http\Controllers\MainPageController::class, 'index'])->name('main.index');
Route::get('/stocks', [App\Http\Controllers\StockController::class, 'index'])->name('stock.index');
Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/info', [App\Http\Controllers\InfoController::class, 'index'])->name('info.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
