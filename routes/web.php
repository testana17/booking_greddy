<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('main');
});


Route::get('/welcome', function () {
    return view('welcome');
});
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/midtrans/callback', [CheckoutController::class, 'callback']);

