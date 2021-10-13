<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    route::get('/', [AdminController::class, 'showLogin'])->name('login');
    route::post('/login', [AdminController::class, 'login'])->name('post.login');
});

Route::middleware('auth')->group(function () {
    route::get('logout', [AdminController::class, 'logout'])->name('logout');
    route::get('dashboard', [AdminController::class, 'index']);

    Route::prefix('room')->group(function () {
        route::get('/price-rule', [AdminController::class, 'price']);
        route::get('/', [AdminController::class, 'room']);
        route::get('/add', [AdminController::class, 'addRoom']);
        route::post('/add/post', [AdminController::class, 'postRoom'])->name('post.room');
        route::get('/type', [AdminController::class, 'type']);
        route::get('/device/{room}', [AdminController::class, 'device']);
        route::get('/device}', [AdminController::class, 'addDevice']);
    });

});


