<?php

use App\Http\Controllers\HomeController;
use App\Models\Packages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TransactionController;

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

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [HomeController::class, 'loginpost'])->name('login_post');
Route::get('/logout', [HomeController::class,'logout'])->name('logout');

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    Route::resource('package', App\Http\Controllers\PackageController::class);


    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
    Route::get('/transaction/{id}', [TransactionController::class, 'show'])->name('transaction.show');

    Route::get('/cek-tanggal/{date}', [CheckoutController::class, 'cektanggal']);
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/booking/success', [CheckoutController::class, 'success'])->name('success');
    // Route::post('/midtrans/callback', [CheckoutController::class, 'callback']);
});

