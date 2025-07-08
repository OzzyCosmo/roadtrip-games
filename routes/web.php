<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', function () {
    return redirect('/games');
});

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/games/service-station-locator', function () {
    return view('games.service-station-locator');
})->name('games.service-station-locator');
