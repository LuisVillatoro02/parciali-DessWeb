<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Tipo_ClienteController;
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
//Tipo Clientes Routes
Route::get('TipoCliente/index',[Tipo_ClienteController::Class, 'index'])->name('tipocliente.index');
Route::get('TipoCliente/Registrar',[Tipo_ClienteController::Class, 'create'])->name('tipocliente.create');
Route::post('TipoCliente/Store',[Tipo_ClienteController::Class, 'store'])->name('tipocliente.store');
Route::get('TipoCliente/Edit/{id}',[Tipo_ClienteController::Class, 'edit'])->name('tipocliente.edit');
Route::PUT('TipoCliente/Update/{id}',[Tipo_ClienteController::Class, 'update'])->name('tipocliente.update');
Route::get('TipoCliente/Show/{id}',[Tipo_ClienteController::Class, 'show'])->name('tipocliente.show');
Route::DELETE('TipoCliente/Destroy/{id}',[Tipo_ClienteController::Class, 'destroy'])->name('tipocliente.destroy');

//Clientes Routes
Route::get('Cliente/index',[ClienteController::Class, 'index'])->name('cliente.index');
Route::get('Cliente/Registrar',[ClienteController::Class, 'create'])->name('cliente.create');
Route::post('Cliente/Store',[ClienteController::Class, 'store'])->name('cliente.store');
Route::get('Cliente/Edit/{id}',[ClienteController::Class, 'edit'])->name('cliente.edit');
Route::PUT('Cliente/Update/{id}',[ClienteController::Class, 'update'])->name('cliente.update');
Route::get('Cliente/Show/{id}',[ClienteController::Class, 'show'])->name('cliente.show');
Route::DELETE('Cliente/Destroy/{id}',[ClienteController::Class, 'destroy'])->name('cliente.destroy');
