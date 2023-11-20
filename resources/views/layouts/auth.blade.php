<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/main.css">
    @yield('head')
    <title>Dation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('register-page')}}">Cadastro</a></li>
                <li><a href="{{route('login-page')}}">Login</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>