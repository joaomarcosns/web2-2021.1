@extends('layouts/main')

@section('titulo', 'Cadastro de Fonecedores')
@section('h1', 'Cadastro de Fornecedores')


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
                        <form id="contact-form" role="form" method="POST" action="./store">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_nome">Nome do Fornecedor *</label>
                                            <input id="form_nome" type="text" name="nome" class="form-control" id="nome"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_cnpj">CNPJ *</label>
                                            <input id="form_cnpj" type="text" name="cnpj" id="cnpj" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefone">Telefone *</label>
                                            <input id="telefone" type="tel" name="telefone" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="endereco">Endereço *</label>
                                            <input type="text" name="endereco" id="endereco" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center mt-2">
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
