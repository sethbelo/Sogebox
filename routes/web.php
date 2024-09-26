<?php

use App\Http\Controllers\AtelieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\RhController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);


Route::resource('users', UserController::class)->middleware('checkrole:rh,superadmin');
Route::resource('employes', EmployeController::class)->middleware('checkrole:rh,superadmin');
Route:: resource('departements', DepartementController::class)->middleware('checkrole:rh,superadmin');
Route::resource('commandes', CommandeController::class)->middleware('checkrole:superadmin,atelier,commercial');
Route::resource('clients', ClientController::class)->middleware('checkrole:rh,superadmin,commercial');
Route::resource('comptes', CompteController::class)->middleware('checkrole:commercial,superadmin');

Route::get('/clients-contact', [ClientController::class, 'contact'])->name('clients.contact')->middleware('checkrole:rh,superadmin,dga');

Route::get('/client-traffic', [ClientController::class, 'getClientTrafficData']);

Route:: get('/getsoldes', [HomeController::class, 'getAccounts']);

Route::get('/getrecentemployees', [HomeController::class, 'getRecentEmployees']);

Route::get('faq', function () {
    return view('faq.index');
})->name('faq')->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
