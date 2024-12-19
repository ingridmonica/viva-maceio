<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/eventos', [EventoController::class, 'listar'])->name('eventos.listar');

Route::get('/eventos/hoje', [EventoController::class, 'listarHoje'])->name('eventos.listar.hoje');

Route::get('/eventos/detalhar/{evento}', [EventoController::class, 'show'])->name('eventos.show');

Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.novo');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cadastrarEvento', [EventoController::class, 'create'])->middleware(['auth', 'verified'])->name('cadastroEvento');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // adicionar roda de cadastro de evento
});

require __DIR__.'/auth.php';
