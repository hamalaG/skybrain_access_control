<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorizedPeopleController;
use App\Http\Controllers\RecognizedPeopleController;
use App\Http\Controllers\RecognizedVehicleController;
use App\Http\Controllers\AuthorizedVehiclesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('authorizedpeople', AuthorizedPeopleController::class)
    ->middleware(['auth', 'verified']);

Route::resource('authorizedvehicles', AuthorizedVehiclesController::class)
    ->middleware(['auth', 'verified']);

// today's people
Route::resource('recognizedperson', RecognizedPeopleController::class)
    ->only('index', 'show', 'destroy')
    ->middleware(['auth', 'verified']);

// today's vehicles
Route::resource('recognizedvehicle', RecognizedVehicleController::class)
    ->only('index', 'show', 'destroy')
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
