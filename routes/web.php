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
Route::get('/restaurant', [App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurant.index');
Route::get('/sales', [App\Http\Controllers\SaleController::class, 'index'])->name('sale.index');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('order.index');
Route::get('/restaurant/estab', [App\Http\Controllers\EstablishmentController::class, 'index'])->name('establishment.index');
Route::get('/favorites', [App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite.index');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('/menu_unlog', [App\Http\Controllers\WelcomeUnlogController::class, 'index'])->name('welcomeUnlog.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
