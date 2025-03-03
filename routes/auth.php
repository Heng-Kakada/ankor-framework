<?php

use AnkorFramework\App\Route\Route;
use src\controllers\user\AuthController;
use src\controllers\user\HomeController;

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', AuthController::class, 'logout');
    Route::get('/profile/{id}', AuthController::class, 'profile');
    Route::post('/profile/store', AuthController::class, 'storeProfile');

    Route::get('/contact', HomeController::class, 'contact');
});

Route::middleware(['auth', 'manager', 'admin'])->group(function () {

});

Route::middleware(['auth', 'admin'])->group(function () {

});