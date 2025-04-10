<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/notifcallback', [CheckoutController::class, 'callback']);
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('success');