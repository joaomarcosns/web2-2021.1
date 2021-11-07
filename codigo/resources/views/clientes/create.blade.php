@extends('layouts/main')

@section('titulo', 'Cadastrar Clentes')
@section('h1', 'Cadastro de Clientes')


@section('main')
    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body d-flex justify-content-center">
                        <form id="contact-form" role="form" method="POST" action="{{ route('clientes.store') }}">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="form_nome">Nome do Fornecedor *</label>
                                        <input id="form_nome" type="text" name="nome" id="nome" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_endereco">Endereço *</label>
                                            <input id="form_endereco" type="text" name="endereco" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="debito">Débito *</label>
                                            <input type="text" name="debito" id="debito" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success btn-send pt-2 btn-block "
                                            value="Enviar">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
