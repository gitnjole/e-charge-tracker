<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCardController;
use App\Http\Controllers\ApiStoreController;

Route::get('/card', [
    ApiCardController::class, 'index'
]);

Route::get('/stores', [
    ApiStoreController::class, 'index'
]);