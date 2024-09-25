<?php

use App\Http\Controllers\AtelieController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\RhController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('dashboard', function () {
    return view('dashboard' );
})->name('dashboard')->middleware(['auth', 'verified']);


Route::resource('users', UserController::class)->middleware('checkrole:rh,superadmin');
Route::resource('employes', EmployeController::class)->middleware('checkrole:rh,superadmin');
Route:: resource('departements', DepartementController::class)->middleware('checkrole:rh,superadmin');
Route::resource('departements', DepartementController::class)->middleware('checkrole:rh,superadmin');

Route::get('faq', function () {
    return view('faq.index');
})->name('faq')->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
