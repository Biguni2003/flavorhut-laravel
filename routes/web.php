<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FoodController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Root Route
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    return redirect('/login');

});

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

Route::view('/about', 'about');

Route::view('/contact', 'contact');

Route::view('/ordersuccess', 'ordersuccess');

/*
|--------------------------------------------------------------------------
| Dashboard / Main Home Page
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    return view('home');

})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Profile Page
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::view('/profile', 'profile')->name('profile');

});

/*
|--------------------------------------------------------------------------
| Food Routes
|--------------------------------------------------------------------------
*/

Route::get('/foods', [FoodController::class, 'foods']);

Route::get('/fooddetails/{category}', [FoodController::class, 'foodDetails']);

Route::get('/beverages', [FoodController::class, 'beverages']);

/*
|--------------------------------------------------------------------------
| Cart Routes
|--------------------------------------------------------------------------
*/

Route::get('/cart', [CartController::class, 'index']);

Route::get('/add-to-cart/{id}', [CartController::class, 'add']);

Route::get('/increase/{index}', [CartController::class, 'increase']);

Route::get('/decrease/{index}', [CartController::class, 'decrease']);

Route::get('/delete/{index}', [CartController::class, 'delete']);

/*
|--------------------------------------------------------------------------
| Checkout Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/checkout', [CheckoutController::class, 'index']);

    Route::post('/place-order', [CheckoutController::class, 'placeOrder']);

});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/add-food', [AdminController::class, 'addFood']);

    Route::post('/store-food', [AdminController::class, 'storeFood']);

    Route::get('/manage-foods', [AdminController::class, 'manageFoods']);

    Route::get('/delete-food/{id}', [AdminController::class, 'deleteFood']);

    Route::get('/edit-food/{id}', [AdminController::class, 'editFood']);

    Route::post('/update-food/{id}', [AdminController::class, 'updateFood']);

    Route::get('/manage-orders', [AdminController::class, 'manageOrders']);

    Route::post('/update-status', [AdminController::class, 'updateStatus']);

    Route::get('/edit-food/{id}', [AdminController::class, 'editFood']);

Route::post('/update-food/{id}', [AdminController::class, 'updateFood']);

});