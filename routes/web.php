<?php

use App\Http\Controllers\MercanciaController;
use App\Models\Mercancia;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('mercancias', MercanciaController::class);

Route::get('/usuarios/registrar', function (){
    return view('Usuarios.formulario');
});