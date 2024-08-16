<?php

use App\Http\Controllers\AuthViewController;
use Illuminate\Support\Facades\Route;

// Archivo de rutas web
Route::get('/', function () {
    return redirect()->route('login.form');
});

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', [AuthViewController::class, 'showLoginForm'])->name('login.form');



// Ruta para mostrar el formulario de registro
Route::get('/register', [AuthViewController::class, 'showRegisterForm'])->name('register.form'); // auth para rutas web


// Define la ruta para la página de bienvenida
Route::get('/home', [AuthViewController::class, 'showWelcomePage'])->name('home.form');


// Define la ruta para la página de bienvenida
Route::get('/list', [AuthViewController::class, 'showlistPage'])->name('list');

// Ruta para la vista de cerrar sesión
Route::get('/logout', [AuthViewController::class, 'showLogoutPage'])->name('logout');
