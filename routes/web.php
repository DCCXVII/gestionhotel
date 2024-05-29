<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PieceController;
use App\Http\Controllers\ReservationController;

Route::middleware(['auth'])->group(function () {
    Route::get('profile', [UserController::class, 'profile']);
    Route::get('pieces', [PieceController::class, 'getPieces']);
    Route::get('reservations', [ReservationController::class, 'getReservations']);
});

// Route::get('pieces', [PieceController::class, 'index']);
Route::get('Login', [AuthController::class, 'index'])->name('Login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::post('create-reservation', [ReservationController::class, 'createResevation']);
Route::get('pieces-info', [PieceController::class, 'getPiecesInfo']);

Route::get('logout', [AuthController::class, 'signOut'])->name('logout');