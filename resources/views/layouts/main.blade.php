<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Fonts do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

         <!-- CSS do Bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- CSS da aplicação  -->

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js.scripts.js"></script>

    </head>
    <body>

    <!--Cabeçalho do site -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="" class="navbar-brand">
                    <img src="/img/logo_xpm.webp" alt="JM Events">
                </a>
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/eventos" class="nav-link">Eventos</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/entrar" class="nav-link">Entrar</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/cadastrar" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield ('content')
    <footer>
        <p>JM Events  &Copy; 2021</p>
    </footer>
        
    </body>
</html>
