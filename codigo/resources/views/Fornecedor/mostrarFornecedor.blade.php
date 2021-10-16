<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mostrar Fornecedor</title>

</head>
<body>
    {{-- Nav bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid"> <button class="navbar-toggler navbar-toggler-right border-0 p-0" type="button" data-toggle="collapse" data-target="#navbar20">
                <p class="navbar-brand text-white mb-0"> <i class="fa d-inline fa-lg fa-stop-circle"></i> BBBOOTSTRAP </p>
            </button>
            <div class="collapse navbar-collapse" id="navbar20">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="#">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Contactus</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
                </ul>
                <p class="d-none d-md-block lead mb-0 text-white"> <i class="fa d-inline fa-lg fa-stop-circle"></i> <b> BBBOOTSTRAP</b> </p>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-1"> <a class="nav-link" href="#"> <i class="fa fa-github fa-fw fa-lg"></i> </a> </li>
                    <li class="nav-item mx-1"> <a class="nav-link" href="#"> <i class="fa fa-dropbox fa-fw fa-lg"></i> </a> </li>
                    <li class="nav-item mx-1"> <a class="nav-link" href="#"> <i class="fa fa-bitbucket fa-fw fa-lg"></i> </a> </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- conteudo --}}
    <div class="container pt-5">
    <h1>Lista de Fornecedor</h1>
    <a href="{{route("cadastrarFornecedorCreate")}}" class="btn btn-success mt-2">Adicionar</a>
    <table class="table table-striped table-hover mt-5">
        <thead>
          <tr>
            <th scope="col">Nome do Fornecedpr</th>
            <th scope="col">DDD</th>
            <th scope="col">Telefone</th>
            <th scope="col">Estado</th>
            <th scope="col">Cidade</th>
            <th scope="col">Ativo</th>
            <th scope="col">Criado em</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($fornecedores as $fornecedor)
          <tr>
            <td>{{$fornecedor->nome_fornecedor}}</td>
            <td>{{$fornecedor->ddd}}</td>
            <td>{{$fornecedor->num_telefone}}</td>
            <td>{{$fornecedor->estado}}</td>
            <td>{{$fornecedor->cidade}}</td>
            <td>{{$fornecedor->ativo}}</td>
            <td>{{$fornecedor->created_at}}</td>
            <td>
                <a href="#" class="btn btn-sm"> <i class="fa fa-eye"></i> </a>
                <a href="#" class="btn btn-sm"> <i class="fa fa-edit"></i> </a>
                <a href="#" class="btn btn-sm"> <i class="fa fa-trash-alt"></i> </a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>