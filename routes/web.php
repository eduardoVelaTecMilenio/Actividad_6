<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::get('/producto/editar', [ProductoController::class, 'edit']);
Route::get('/producto/mostrar', [ProductoController::class, 'index']);
Route::get('/producto/nuevo', [ProductoController::class, 'create']);