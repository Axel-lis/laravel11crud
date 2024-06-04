<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Ruta pública
Route::get('/', function () {
    return view('welcome');
});

// Ruta protegida por autenticación
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Incluye las rutas de Jetstream (esto ya se hace automáticamente)
// require __DIR__.'/auth.php';

Route::resource('students', StudentController::class);