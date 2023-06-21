<?php

use App\Http\Controllers\OnePageController;
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


//Ruta para el login y registro
Route::get('/login', function () {
    return view('autentication.login_user');
});


//Ruta para el about us
Route::get('/', function () {
    return view('welcome');
});

//Ruta para mostrar el about us de la one page
// Route::get('/aboutUs', [OnePageController::class, 'irALugarEspecifico']);
