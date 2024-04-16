<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::controller(UserController::class)->group(function () {
    Route::get('Cotizaciones', 'index');
    Route::get('Servicio_cliente', 'servicioCliente');
    // Route::get('Catalogo', 'catalogo');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('Resumen_Ventas', 'resumenVentas');
    Route::get('sales-by-month', 'salesByMonth');
    Route::get('Resumen_Ventas', 'ventasPorMes');
});

Route::view('/login', 'login')->name('login');
Route::view('/registro', 'register')->name('registro');
Route::view('/privada', 'secret')->name('privada');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//Rutas Para productos Administrador
// Ruta para mostrar la lista de productos
Route::get('/productosAdmin', [ProductoController::class, 'index'])->name('productos.catalogoAdmin');

// Ruta que muestra el formulario para crear un nuevo producto
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');

// Ruta para almacenar un nuevo producto en la base de datos
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

// Ruta para mostrar un solo producto
Route::get('/productosAdmin/{id}', [ProductoController::class, 'show'])->name('productos.show');

// Ruta que muestra el formulario para editar un producto existente
Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');

// Ruta para actualizar un producto en la base de datos
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');

// Ruta para eliminar un producto de la base de datos
Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');


//Ruta para Productos Cliente
Route::get('/productos', [ProductoController::class, 'indexCliente'])->name('catalogo');
// Ruta para mostrar un solo producto en vista Cliente
Route::get('/productos/{id}', [ProductoController::class, 'showCliente'])->name('showProducto');
