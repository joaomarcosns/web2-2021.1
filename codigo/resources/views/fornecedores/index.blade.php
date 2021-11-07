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
                    <th scope="col">Nome do Fornecedor</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fornecedores as $fornecedor)
                    <tr>
                        <td>{{ $fornecedor->nome }}</td>
                        <td>{{ $fornecedor->cnpj }}</td>
                        <td>{{ $fornecedor->telefone }}</td>
                        <td>{{ $fornecedor->endereco }}</td>
                        <td>{{ $fornecedor->created_at }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2" style="margin-right: 10px ">
                                    <a href="#"
                                        class="btn btn-sm btn-warning">EDITAR</a>
                                </div>
                                <form method="post" action="./fornecedores/destroy">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $fornecedor->id }}" />

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
