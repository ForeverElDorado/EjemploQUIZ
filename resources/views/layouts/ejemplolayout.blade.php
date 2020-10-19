<html>

<head>
    <title>Nombre de la App - @yield('titulo')</title>

</head>

<body>
    @section('barralateral')
    Esto es la barra lateral
    @show

    <div class="cotainer">
        @yield('contenido')
    </div>
</body>

</html>