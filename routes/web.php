<?php

use App\Http\Controllers\OnePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;

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


//Ruta para el login y registro
Route::get('/login', function () {
    return view('autentication.login_user');
});

//Ruta para el dashboard
Route::get('/', function () {
    return view('welcome');
});


//Ruta para mostrar el about us de la one page
// Route::get('/aboutUs', [OnePageController::class, 'irALugarEspecifico'])->name('irALugarEspecifico');

// Ruta para vista registro de usuarios
Route::get('/register', [RegisterController::class, 'index'])->name('register');

//Ruta para enviar datos al servidor
Route::post('/register', [RegisterController::class, 'store']);

//Ruta para login
Route::get('/login', [LoginController::class, 'index'])->name('login');

//Ruta de validacion del login
Route::post('/login', [LoginController::class, 'store']);
