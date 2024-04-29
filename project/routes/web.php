<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Route;



Route::get('/', [NavigationController::class,'welcomeScreen'])->name('opening');
Route::get('/categories', [NavigationController::class, 'categoriesView'])->name('categories');
Route::get('/categories/{id}',[ NavigationController::class, 'productsView'])->name('products');
Route::get('/orders',[NavigationController::class, 'ordersView' ])->name('orders');


#auth
Route::get('/login', [NavigationController::class, 'authView'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('authPost');

#logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

#route for authorized users
Route::get('/orders', [NavigationController::class, 'ordersView'])->middleware('auth')->name('orders');


#registration
Route::get('/registration', [AuthController::class, 'registrationView'])->name('registration');
Route::post('/registration', [AuthController::class, 'registrationStore'])->name('registrationPost');
