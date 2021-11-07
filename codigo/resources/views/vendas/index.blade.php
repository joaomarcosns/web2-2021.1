@extends('layouts/main')

@section('titulo', 'Listagem de Fonecedores')
@section('h1', 'lista de Fornecedores')


@section('main')
    <div class="container pt-5">
        <div class="div-btn">
            <a href="{{ route('fornecedores.create') }}" class="btnn mt-2">Adicionar</a>
        </div>
        @if (Session::has('msg'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('msg') }}
            </div>
        @endif
        <div class="container pt-5">
            <h1>Lista de Produtos</h1>
            <a href="./vendas/create" class="btn btn-success mt-2">Adicionar</a>
            <table class="table table-striped table-hover mt-5">
                <thead>
                    <tr>
                        <th scope="col">Nome do Cleinte</th>
                        <th scope="col">VALOR TOTAL</th>
                        <th scope="col">DATA DA VENDA</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vendas as $venda)
                        <tr>
                            <td>{{ $venda->idcliente }}</td>
                            <td>R$ {{ $venda->valortotal }}</td>
                            <td>{{ $venda->datavenda }}</td>
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
