<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <h1>@yield('h1')</h1>
    </header>

    <nav>
        <ul>
            <li>
                <a href="{{route('clientes.index')}}">Clientes</a>
            </li>
            <li>
                <a href="{{route('produtos.index')}}">Produtos</a>
            </li>
            <li>
                <a href="{{route('fornecedores.index')}}">Fronecedor</a>
            </li>
            <li>
                <a href="{{route('vendas.index')}}">Venda</a>
            </li>
            <li>
                <a href="{{route('entradas.index')}}">Compra</a>
            </li>

        </ul>
    </nav>

    <main>
        @yield('main')
    </main>

    <footer>
        <p>&copy; JOAO MARCOS</p>
    </footer>
</body>

</html>
