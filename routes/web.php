<?php

use App\Http\Controllers\NRRController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;


Route::post('/calculate-nrr', [NRRController::class, 'calculateNRR']);
Route::get('/nrr', function () {
    return view('nrr');
});

Route::resource('transactions', TransactionController::class);
