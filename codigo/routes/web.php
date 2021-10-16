<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Models\Fornecedor;
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

Route::get('/clientes', [ClienteController::class, 'index']);


Route::get('/fornecedores', [FornecedorController::class, 'index']);
Route::get('/fornecedores/cadastrar', [FornecedorController::class, 'create'])->name('cadastrarFornecedorCreate');
Route::post('/fornecedores/cadastrar', [FornecedorController::class, 'store'])->name('cadastrarFornecedorStore');
