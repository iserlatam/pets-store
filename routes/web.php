<?php

use App\Http\Controllers\Pets\OwnerController;
use App\Http\Controllers\Pets\PetController;
use App\Models\Owner;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::view('/test', 'tailwind');

Route::view('/ow', 'owners.create');

Route::prefix('pets-store')->group(function () {

    Route::prefix('pets')->group(function () {
        Route::get('/', [PetController::class, 'index'])
            ->name('pets');

        // Find one pet
        Route::get('{id}', [PetController::class, 'show'])
            ->name('pets.show');

        // Route::view('pets/create', 'pets.create');

        // Show the form for create a new pet

        // Register a new pet
        Route::post('new', [PetController::class, 'store'])
            ->name('pets.store');
    });
    // Pets

    Route::prefix('owners')->group(function () {
        // Owners
        Route::get('/', [OwnerController::class, 'index'])
            ->name('owners');

        // Show one Owner
        Route::get('id/{id}', [OwnerController::class, 'show'])
            ->name('owners.show');
    });
});

Route::get('pets/create', [PetController::class, 'create'])
    ->name('pets.create');

Route::post('pets/create', [PetController::class, 'store'])
    ->name('pets.store');

Route::get('pets/edit/{id}', [PetController::class, 'edit'])
    ->name('pets.edit');

Route::put('pets/edit/{id}', [PetController::class, 'update'])
    ->name('pets.update');

Route::delete('pets/delete/{id}', [PetController::class, 'destroy'])
    ->name('pets.destroy');
