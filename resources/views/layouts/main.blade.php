<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/main2.css">
    @yield('head')
    <title>Dation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('create-file-page')}}">Criar arquivo</a></li>
                <li><a href="{{route('planner-page')}}">Financeiro</a></li>
                <h1>Dation</h1>
                <li><a href="{{route('list-files-page')}}">Calendario</a></li>
                <li><a href="{{route('update-user-page')}}">Perfil</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>