<?php

use App\Http\Controllers\ProductoController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        $productos = Producto::query();

        $stats = [
            'totalProductos' => (clone $productos)->count(),
            'productosDisponibles' => (clone $productos)->where('disponible', true)->count(),
            'stockTotal' => (clone $productos)->sum('stock'),
        ];
    } catch (\Throwable $exception) {
        $stats = [
            'totalProductos' => 0,
            'productosDisponibles' => 0,
            'stockTotal' => 0,
        ];
    }

    return view('welcome', $stats);
});
Route::resource(
    'productos',
    ProductoController::class
);
