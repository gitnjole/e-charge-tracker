<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCardController;

Route::get('/card', [
    ApiCardController::class, 'index'
]);