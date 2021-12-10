<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/products', function () {
    $busca = request('search');
    return view('products', ['busca' => $busca]);
});

Route::get('/products_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});