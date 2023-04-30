<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnquestadorController;
use App\Http\Controllers\EnquestaController;
use App\Http\Controllers\PreguntaController;

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



Route::middleware('auth')->group(function () {

    Route::controller(EnquestadorController::class)->group(function () {
    Route::get('/enquestador', 'index');

    });

    Route::controller(EnquestaController::class)->group(function () {
        Route::get('/enquesta/create', 'create')->name('enquesta.create');
        Route::post('/enquesta/upload', 'store')->name('enquesta.store');
        Route::delete('/enquesta/{id}', 'destroy')->name('enquesta.destroy');
        Route::put('/enquesta/{id}', 'update')->name('enquesta.update');
        Route::get('/enquesta/{id}', 'edit')->name('enquesta.edit');

    });

    Route::controller(PreguntaController::class)->group(function () {
        Route::post('/enquesta/{id}', 'store')->name('pregunta.store');
        Route::delete('/pregunta/{id}', 'destroy')->name('pregunta.destroy');
        
    });

    Route::controller(OpcioController::class)->group(function () {
    
    });


    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/create', [EnquestadorController::class, 'store'])->name('enquestadors.store');
    Route::put('/dashboard/{id}', [EnquestadorController::class, 'update'])->name('enquestador.update');
    Route::delete('/enquestador/{id}', [EnquestadorController::class, 'destroy'])->name('enquestador.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
