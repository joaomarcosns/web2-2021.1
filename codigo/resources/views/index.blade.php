@extends('layouts.main')

@section('conteudo')
    <div class="text-center" style="color: black">
        <h4>Bem vindos! O que deseja?</h4>
    </div>
    <div class="btn-group btn-group-lg m-4" role="group">
        <a class="btn btn-primary" href="{{ route("produtos.index") }}">
            Produtos
        </a>
        <a class="btn btn-secondary" href="{{ route("clientes.index") }}">
            Clientes
        </a>
        <a class="btn btn-success" href="{{ route("fornecedores.index") }}">
            Fornecedores
        </a>
        <a class="btn btn-danger" href="{{ route("vendas.index") }}">
            Vendas
        </a>
        <a class="btn btn-warning" href="{{ route("compras.index") }}">
            Compras
        </a>
    </div>
@endsection