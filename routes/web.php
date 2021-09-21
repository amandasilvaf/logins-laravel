<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginAdminController;
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

Route::middleware(['admin'])->group(function(){

    Route::get('/admin', function(){
        dd("Você é admin");
    });
});

Route::middleware(['client'])->group(function(){

    Route::get('/client', function(){
        dd("Você é client");
    });
});