<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\AtelieController;
use App\Http\Controllers\RhController;


Route::get('/', function () {
    return view('auth.login' );
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('reception', ReceptionController::class);
    Route::get('rendez-vous', [ReceptionController::class, 'rendezIndex']);
    Route::get('reservations', [ReceptionController::class, 'reservaIndex']);
    Route::get('clients', [ReceptionController::class, 'clientsIndex']);

    Route::resource('atelier', AtelieController::class);
    Route::resource('Rh', RhController::class);
});

require __DIR__.'/auth.php';
