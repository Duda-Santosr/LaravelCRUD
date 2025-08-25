<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Registro
Route::get('/register', [UserController::class, 'registerPage'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// Login
Route::get('/login', [UserController::class, 'loginPage'])->name('login');
Route::post('/login', [UserController::class, 'login']);

// Dashboard
Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');

// Editar perfil
Route::get('/edit', [UserController::class, 'editPage'])->middleware('auth');
Route::post('/edit', [UserController::class, 'update'])->middleware('auth');

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
