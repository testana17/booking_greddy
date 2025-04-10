<?php

use App\Models\Packages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/', function () {
    $packages = Packages::all();
    return view('main', compact('packages'));
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/cek-tanggal/{date}', [CheckoutController::class, 'cektanggal']);
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/booking/success', [CheckoutController::class, 'success'])->name('success');
// Route::post('/midtrans/callback', [CheckoutController::class, 'callback']);

