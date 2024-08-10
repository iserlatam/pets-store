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
    return view('welcome');
});

Route::prefix('pets-store')->group(function () {

    // Pets
    Route::get('pets', [PetController::class, 'index']);

    // Find one pet
    Route::get('pets/{id}', [PetController::class, 'show']);

    Route::prefix('owners')->group(function () {
        // Owners
        Route::get('/', [OwnerController::class, 'index'])
            ->name('owners');

        // Show one Owner
        Route::get('id/{id}', [OwnerController::class, 'show'])
            ->name('owners.show');
    });

});
