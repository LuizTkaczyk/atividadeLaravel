<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - crud carros</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Lara<b>Vel</b></a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href=" <?= url('/carros');  ?>" class="nav-link">Listar todos os veiculos </a></li>
            <li class="nav-item"><a href=" <?= url('/carros/novo');  ?>" class="nav-link"> Cadastrar novo veículo</a></li>
    
        </ul>
    </div>
</nav>

@yield('content')
    
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>