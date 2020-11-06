<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body>
        <h1 style="color: red"> @yield("header")</h1>
        @yield('pag')

        <nav aria-label="Navegação de página exemplo">
            <ul class="pagination">
                <li class="page-item"></li>
                <li class="page-item"></li>
                <li class="page-item"></li>
                <li class="page-item"></li>
                <li class="page-item"></li>
            </ul>
        </nav>
        @yield('conteudo')
    </body>
</html>