<?php

use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('card/check');
});

Route::post('/', [
    CardController::class, 'index'
]);