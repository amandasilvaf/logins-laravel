<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartamentoControlador;
use App\Http\Controllers\ProdutoControlador;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/produtos', [ProdutoControlador::class, 'index']);
Route::get('/teste', [ProdutoControlador::class, 'test'])->middleware('auth');
Route::get('/departamentos', [DepartamentoControlador::class, 'index']);
Route::get('/usuario', function(){
    return view('usuario');
});

Route::get('/admin', [AdminController::class, 'index'])->name('homeadmin');

