<?php

use App\Http\Controllers\{CustomerController, HallController, OfferController, OptionController};
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return Auth::check()
//         ? redirect('/')
//         : redirect()->route('login');
// });
Route::get('/', fn() => view('welcome'));

Route::prefix('{locale}')->group(function () {
    Route::resource('halls', HallController::class);
    Route::resource('offers', OfferController::class);
    Route::resource('options', OptionController::class);
    Route::resource('customers', CustomerController::class);
});

Route::fallback(fn() => view('404'));

require __DIR__.'/auth.php';
