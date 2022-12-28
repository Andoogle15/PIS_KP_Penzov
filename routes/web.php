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
Route::get('/home/stocks', [App\Http\Controllers\StockController::class, 'index'])->name('stock.index');
Route::get('/home/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('add_to_cart/{id}', [App\Http\Controllers\DishController::class, 'addToCart'])->name('add_to_cart');
Route::delete('remove-from-cart', [App\Http\Controllers\DishController::class, 'remove'])->name('remove_from_cart');
Route::get('/home/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/home/info', [App\Http\Controllers\InfoController::class, 'index'])->name('info.index');
Route::get('/home/restaurant', [App\Http\Controllers\RestaurantController::class, 'allData'])->name('restaurant.allData');
Route::get('/home/sales', [App\Http\Controllers\SaleController::class, 'index'])->name('sale.index');
Route::get('/home/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::get('/home/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('order.index');
Route::get('/home/restaurant/estab', [App\Http\Controllers\EstablishmentController::class, 'allData'])->name('establishment.allData');
Route::get('/home/favorites', [App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite.index');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('/home/create_order', [App\Http\Controllers\MakeOrderController::class, 'index'])->name('makeOrder.index');


//Unlog routes
Route::get('/menu_unlog', [App\Http\Controllers\WelcomeUnlogController::class, 'index'])->name('welcomeUnlog.index');
Route::get('/menu_unlog', [App\Http\Controllers\WelcomeUnlogController::class, 'index'])->name('welcomeUnlog.index');
Route::get('/menu_unlog/stocks', [App\Http\Controllers\StockUnlogController::class, 'index'])->name('stockUnlog.index');
Route::get('/menu_unlog/contacts', [App\Http\Controllers\ContactUnlogController::class, 'index'])->name('contactUnlog.index');
Route::get('/menu_unlog/info', [App\Http\Controllers\InfoUnlogController::class, 'index'])->name('infoUnlog.index');
Route::get('/menu_unlog/restaurants', [App\Http\Controllers\RestaurantUnlogController::class, 'index'])->name('restaurantUnlog.index');
Route::get('/menu_unlog/sales', [App\Http\Controllers\SaleUnlogController::class, 'index'])->name('saleUnlog.index');
Route::get('/menu_unlog/restaurants/estab', [App\Http\Controllers\EstablishmentUnlogController::class, 'index'])->name('establishmentUnlog.index');


Route::get('/home/first_course', [App\Http\Controllers\FirstCourseController::class, 'allData'])->name('firstCourse.allData');
Route::get('/home/second_course', [App\Http\Controllers\SecondCourseController::class, 'allData'])->name('secondCourse.allData');
Route::get('/home/salads', [App\Http\Controllers\SaladController::class, 'allData'])->name('salad.allData');
Route::get('/home/drinks', [App\Http\Controllers\DrinkController::class, 'allData'])->name('drink.allData');
Route::get('/home/pizza', [App\Http\Controllers\PizzaController::class, 'allData'])->name('pizza.allData');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'allData'])->name('home');
