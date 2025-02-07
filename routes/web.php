<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DenominationController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DenominationController::class, 'index']);
Route::post('/calculate', [DenominationController::class, 'calculate'])->name('calculate');
