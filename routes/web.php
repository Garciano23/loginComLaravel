<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;


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
Route::post('/usuario_executar_login',[UsuariosController::class,'executarlogin']);

Route::get('/', function () {
    return view('welcome');
});
