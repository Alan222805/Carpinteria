<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Auth;

Route::controller(UserController::class)->group(function () {
    Route::get('Cotizaciones', 'cotizaciones')->name('Cotizaciones.user');
    Route::post('Cotizaciones', 'store')->name('cotizacion.store');;
    Route::get('Servicio_cliente', 'servicioCliente');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('Resumen_Ventas', 'resumenVentas'); // Asegúrate de tener un solo endpoint para Resumen_Ventas
    Route::get('sales-by-month', 'salesByMonth');
    Route::get('Resumen_Ventas', 'ventasPorMes');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Acciones de autenticación
Route::post('/validar-registro', [AuthController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [AuthController::class, 'login'])->name('inicia-sesion');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Usar POST para logout

// Rutas de productos para admin
Route::controller(ProductoController::class)->group(function () {
    Route::get('/productosAdmin', 'index')->name('productos.catalogoAdmin');
    Route::get('/productos/create', 'create')->name('productos.create');
    Route::post('/productos', 'store')->name('productos.store');
    Route::get('/productosAdmin/{id}', 'show')->name('productos.show');
    Route::get('/productos/{id}/edit', 'edit')->name('productos.edit');
    Route::put('/productos/{id}', 'update')->name('productos.update');
    Route::delete('/productos/{id}', 'destroy')->name('productos.destroy');
});

// Rutas de productos para clientes
Route::get('/', [ProductoController::class, 'indexCliente'])->name('catalogo');
Route::get('/productos/{id}', [ProductoController::class, 'showCliente'])->name('showProducto');

