<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


    
    Route::get('/clients', [\App\Http\Controllers\ClientsController::class, 'index'])->name('clients.index');
    Route::get('/clients/create', [\App\Http\Controllers\ClientsController::class, 'create'])->name('clients.create');
    Route::post('/clients', [\App\Http\Controllers\ClientsController::class, 'store'])->name('clients.store');


    Route::get('/projets', [\App\Http\Controllers\ProjetsController::class, 'index'])->name('projets.index');
    Route::post('/projets', [\App\Http\Controllers\ProjetsController::class, 'store'])->name('projets.store');
    Route::get('/projets/create', [\App\Http\Controllers\ProjetsController::class, 'create'])->name('projets.create');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
