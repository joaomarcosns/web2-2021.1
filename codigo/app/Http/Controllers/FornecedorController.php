<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function show()
    {
        $fornecedores = Fornecedor::all();

        echo $fornecedores;
    }

    public function index()
    {
        $fornecedores = Fornecedor::all();

        return view('fornecedores.index', ['fornecedores' => $fornecedores]);
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $request->nome;
        $fornecedor->cnpj = $request->cnpj;
        $fornecedor->telefone = $request->telefone;
        $fornecedor->endereco = $request->endereco;
        $fornecedor->save();

        return redirect('fornecedores/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if ($id) {
            $fornecedores = Fornecedor::findOrFail($id);
            return view('fornecedores.edit', ['fornecedores' => $fornecedores]);
        } else {
            return redirect('fornecedores/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        Fornecedor::findOrFail($request->id)->update($request->all());

        return redirect('fornecedores/')->with('msg', 'Atualizado com sucesso!');
    }

    public function destroy(Request $request)
    {
        Fornecedor::findOrFail($request->id)->delete();

        return redirect('fornecedores/')->with('msg', 'Excluído com sucesso!');
    }
}
