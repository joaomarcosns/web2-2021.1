@extends('layouts/main')

@section('titulo', 'Cadastro de Fonecedores')
@section('h1', 'Cadastro de Fornecedores')


@section('main')
    <div class="container mt-5">
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
                                            <label for="form_nome">Nome do Produto *</label>
                                            <input id="form_nome" type="text" name="nome" id="nome" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="icms">ICMS *</label>
                                            <input id="icms" type="number" name="icms" id="icms" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ipi">IPI *</label>
                                            <input id="ipi" type="number" name="ipi" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="frete">Frete *</label>
                                            <input type="number" name="frete" id="frete" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="precofabrica">Preço na Fábrica *</label>
                                            <input id="precofabrica" type="number" name="precofabrica"
                                                class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="precocompra">Preço de Compra *</label>
                                            <input type="number" name="precocompra" id="precocompra" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="precovenda">Preço de Venda *</label>
                                            <input id="precovenda" type="number" name="precovenda" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lucro">Lucro *</label>
                                            <input type="number" name="lucro" id="lucro" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="desconto">Desconto *</label>
                                            <input id="desconto" type="number" name="desconto" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="quantidade">Quantidade *</label>
                                            <input type="number" name="quantidade" id="quantidade" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
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
