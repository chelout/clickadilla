<?php

use App\Http\Controllers\IndicatorController;
use Illuminate\Support\Facades\Route;

Route::get('indicators', [IndicatorController::class, 'index']);
Route::post('indicators', [IndicatorController::class, 'store']);
Route::get('indicators/{indicator}', [IndicatorController::class, 'show']);
