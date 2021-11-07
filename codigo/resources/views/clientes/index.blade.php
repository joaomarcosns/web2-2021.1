@extends('layouts/main')

@section('titulo', 'Clentes')
@section('h1', 'Listagem de Clientes')


@section('main')
    <div class="container">
        <div class="div-btn">
            <a class="btnn" href="{{route('clientes.create')}}">Adicionar</a>
        </div>
        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">Nome do Cliente</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Débito</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>{{ $cliente->debito }}</td>
                        <td>{{ $cliente->created_at }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <div class="mr-4" style="margin-right: 10px">
                                    <a href="{{route('clientes.edit', $cliente->id)}}" class="btn btn-sm btn-warning">EDITAR</a>
                                </div>
                                <form method="post" action="./clientes/destroy">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $cliente->id }}" />

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
