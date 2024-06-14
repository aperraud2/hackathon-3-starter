<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/owners', [App\Http\Controllers\OwnerController::class, 'index']);

Route::get('/pets', [App\Http\Controllers\AnimalController::class, 'index']);

Route::get('/newowners', [App\Http\Controllers\NewOwnerController::class, 'index']);

Route::post('/newowners/store/{id?}', [App\Http\Controllers\NewOwnerController::class, 'store'])->name('newowners.store');