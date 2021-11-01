<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\FornecedorController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/store', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/show/{id}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/update', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/destroy', [ClienteController::class, 'destroy'])->name('clientes.destroy');
});

Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutoController::class, 'index']);
    Route::get('/create', [ProdutoController::class, 'create']);
    Route::post('/store', [ProdutoController::class, 'store']);
});

Route::prefix('entradas')->group(function () {
    Route::get('/', [EntradaController::class, 'index']);
    Route::get('/create', [EntradaController::class, 'create']);
    Route::post('/store', [EntradaController::class, 'store']);
});

Route::prefix('vendas')->group(function () {
    Route::get('/', [VendaController::class, 'index']);
    Route::get('/create', [VendaController::class, 'create']);
    Route::post('/store', [VendaController::class, 'store']);
});

Route::prefix('fornecedores')->group(function () {
    Route::get('/', [FornecedorController::class, 'index']);
    Route::get('/create', [FornecedorController::class, 'create']);
    Route::post('/store', [FornecedorController::class, 'store']);
    Route::get('/show/{id}', [FornecedorController::class, 'show']);
    Route::delete('/destroy', [ClienteController::class, 'destroy']);
});
