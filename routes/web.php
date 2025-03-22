<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/products', [PostController::class,'index']);

Route::get('products/create', [PostController::class,'create']);

Route::get('/products/{id}', [PostController::class, 'show']);

Route::get('/products/{id}/edit', [PostController::class, 'edit']);

Route::delete('/products/{id}/destroy', [PostController::class, 'destroy']);
 
Route::get('/products/search', [PostController::class, 'search']);

