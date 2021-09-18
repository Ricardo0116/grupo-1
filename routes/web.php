<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// rutas de login

Route::get('/', function () {
    return view('principal.index');
});
Route::get('index/login', function () {
    return view('principal.login');
});



// ruta dashboard
Route::get('dashboard', function () {
    return view('welcome');
});
//---------------------



// rutas de productos
Route::get('productos', [ProductController::class, 'index'])->name('productos.index');
Route::get('productos/crear', [ProductController::class, 'create'])->name('productos.crear');
Route::post('productos', [ProductController::class, 'store'])->name('productos.store'); 
Route::get('productos/{idproductos}', [ProductController::class, 'show'])->name('productos.show');
Route::delete('productos/{idproductos}', [ProductController::class, 'destroy'])->name('productos.destroy');
Route::get('productos/edit/{idproductos}', [ProductController::class, 'edit'])->name('productos.edit');
Route::put('productos/{idproductos}', [ProductController::class, 'update'])->name('productos.update');


