@extends('layouts/main')

@section('titulo', 'Listagem de Fonecedores')
@section('h1', 'lista de Fornecedores')


@section('main')
    <div class="container pt-5">
        <div class="div-btn">
            <a href="{{ route('fornecedores.create') }}" class="btnn mt-2">Adicionar</a>
        </div>
        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">ICMS</th>
                    <th scope="col">IPI</th>
                    <th scope="col">FRETE</th>
                    <th scope="col">PREÇO NA FÁBRICA</th>
                    <th scope="col">PREÇO DE COMPRA</th>
                    <th scope="col">PREÇO DE VENDA</th>
                    <th scope="col">LUCRO</th>
                    <th scope="col">DESCONTO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome }} </td>
                        <td>{{ $produto->icms }}</td>
                        <td>{{ $produto->ipi }}</td>
                        <td>{{ $produto->frete }}</li>
                        <td>{{ $produto->precofabrica }}</td>
                        <td>{{ $produto->precocompra }}</td>
                        <td>{{ $produto->precovenda }}</td>
                        <td>{{ $produto->lucro }}</td>
                        <td>{{ $produto->desconto }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>{{ $produto->created_at }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <a href="#" class="btn btn-sm btn-warning">EDITAR</a>
                                </div>
                                <form method="post" action="./clientes/destroy">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="#" />

                                    <input type="submit" class="btn btn-sm btn-danger" value="DELETAR" />
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
