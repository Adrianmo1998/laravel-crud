<?php

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');


Route::resource('empleados', 'EmpleadosController');

Route::resource('clientes', 'ClientesController');

Route::resource('sucursals', 'SucursalController');

Route::resource('pedidos', 'PedidoController');

Route::resource('proveedores', 'ProveedoresController');

Route::resource('estadoPedidos', 'EstadoPedidoController');

Route::resource('detallePedidos', 'DetallePedidoController');

Route::resource('envioPedidos', 'EnvioPedidoController');

Route::resource('facturas', 'FacturaController');