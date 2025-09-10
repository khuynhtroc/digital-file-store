<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class, 'show']);
Route::post('/orders', [\App\Http\Controllers\OrderController::class, 'store']);
?>
