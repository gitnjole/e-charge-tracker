<?php

use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/cards/search', function () {
    return view('cards/search');
});

Route::post('/cards/search', [
    CardController::class, 'find'
]); 

Route::get('/cards/{card:slug}', [
    CardController::class, 'show'
])->name('cards.show');

