<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem de serviço - @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('assets/icon/n-netflix.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/global.style.css')}}">
    @yield('css-style')
</head>
<body>
    <header class="header">
        <div class="inner-header">
            <div class="logo-container">
                <img src="{{asset('assets/img/logo.jpg')}}" draggable="false"/>
            </div>
            <div class="title-container">
                <h1>Assistência Técnica</h1>
            </div>
            <nav class="nav-bar">
                <ul class="nav-list">
                    <li class="nav-item"><a href="" class="nav-link">Cadastrar</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Pesquisar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main-home">
        @yield('content')
    </main>



    <script src="https://kit.fontawesome.com/254fc7b415.js" crossorigin="anonymous" ></script>
    
</body>
</html>