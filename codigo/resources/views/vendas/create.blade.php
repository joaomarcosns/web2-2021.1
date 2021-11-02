<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro de vendas</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid"> <button class="navbar-toggler navbar-toggler-right border-0 p-0" type="button"
                data-toggle="collapse" data-target="#navbar20">
                <p class="navbar-brand text-white mb-0"> <i class="fa d-inline fa-lg fa-stop-circle"></i> BBBOOTSTRAP </p>
            </button>
            <div class="collapse navbar-collapse" id="navbar20">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="clientes/">CLIENTES</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="fornecedores/">FORNECEDOR</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="produtos/">PRODUTOS</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="entradas/">ENTRADAS</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="vendas/">VENDAS</a> </li>
                </ul>
                <p class="d-none d-md-block lead mb-0 text-white"> <i class="fa d-inline fa-lg fa-stop-circle"></i> <b>
                        BBBOOTSTRAP</b> </p>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-1"> <a class="nav-link" href="#"> <i
                                class="fa fa-github fa-fw fa-lg"></i> </a> </li>
                    <li class="nav-item mx-1"> <a class="nav-link" href="#"> <i
                                class="fa fa-dropbox fa-fw fa-lg"></i> </a> </li>
                    <li class="nav-item mx-1"> <a class="nav-link" href="#"> <i
                                class="fa fa-bitbucket fa-fw fa-lg"></i> </a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class=" text-center mt-5 ">
            <h1>Cadastro de vendas</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form" method="POST"action="{{route('vendas.create')}}">
                                @csrf
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="idcliente">ID Cliente *</label>
                                                <input id="idcliente" type="text" name="idcliente" id="idcliente" class="form-control"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"> 
                                            <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Enviar"> 
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro de vendas</title>
</head>

<body>
    <form method="post" action="./store">
        @csrf
        <label for="idcliente">ID CLIENTE</label>
        <input type="text" id="idcliente" name="idcliente" />

        <input type="submit" value="Cadastrar" />
    </form>
</body>
</html>