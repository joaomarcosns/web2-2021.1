<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
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

Route::get('/aluno', function() {
    return view('aluno');
});

Route::get('/alunos', function() {
    return view('aluno', ['teste' => 'teste']);
});

Route::get('/alunos', function() {
    $nome = "JOAO";
    return view('aluno', ['nome' => $nome]);
});

Route::get('/parametros', function() {
    $nome = "JOAO";
    $idade = "20";

    return view('aluno', [
        'pnome' => $nome,
        'pidade' => $idade,
        'pprofissao' => 'programador'
    ]);
});

Route::get('/popcional/{id}', function($id) {
    return view('aluno', ['id' => $id]);
});

Route::get('/pobrigatorio/{id?}', function($id) {
    return view('aluno', ['id' => $id]);
});


Route::get('/pobrigatoriodefault/{id?}', function($id = 1) {
    return view('aluno', ['id' => $id]);
});

Route::get('/pobrigatorionull/{id?}', function($id = null) {
    return view('aluno', ['id' => $id]);
});

Route::get('/queryoarams', function($id = null) {
    $busca = request("pesquisa");
    return view('aluno', ['pesquisa' => $busca]);
});

Route::get('/clientes', [ClienteController::class, 'index']);


Route::get('/fornecedores', [FornecedorController::class, 'index']);

