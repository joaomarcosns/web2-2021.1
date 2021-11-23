<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Vendas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("css/table.css") }}">
    <link rel="stylesheet" href="{{ asset("css/form.css") }}">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo">
            <h2 class="text-center" ><a href="{{ route("site.index") }}">Sistema de Vendas</a></h2>
        </div>
    </header>
    <div class="title">
        <a href="{{ route("produtos.index") }}">Produtos</a>
        <a href="{{ route("clientes.index") }}">Clientes</a>
        <a href="{{ route("fornecedores.index") }}">Fornecedores</a>
        <a href="{{ route("vendas.index") }}">Vendas</a>
        <a href="{{ route("compras.index") }}">Compras</a>
    </div>
    <div class="conteudo mt-3">
        @yield('conteudo')
    </div>
</body>

<script>
$('#myTable').DataTable({
        responsive: true,
        // "bSort": false,
        "aaSorting": [],
        "pageLength": 10,
        "language": {
            "decimal": "",
            "emptyTable": "Sem dados disponíveis",
            "info": "Mostrando de _START_ até _END_ de _TOTAL_ registos",
            "infoEmpty": "Mostrando de 0 até 0 de 0 registos",
            "infoFiltered": "(filtrado de _MAX_ registos no total)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ registos",
            "loadingRecords": "A carregar dados...",
            "processing": "A processar...",
            "search": "Procurar:",
            "zeroRecords": "Não foram encontrados resultados",
            "paginate": {
                "first": "Primeiro",
                "last": "Último",
                "next": "Seguinte",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": ": ordem crescente",
                "sortDescending": ": ordem decrescente"
            }
        }
    });
</script>

@stack('scripts')

</html>