<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevStagram - @yield('titulo')</title>
    </head>
    <body>
        <!--<h1>Hola mundo en Laravel Laravel v9.45.1 (PHP v8.1.13)</h1>-->
        <a href="/">Principal</a> |
        <a href="/nosotros">Nosotros</a> |
        <a href="/tienda">Tienda</a> |
        <a href="/contacto">Contacto</a>
    </body>
    <h1>@yield('titulo')</h1>
    <hr>

    @yield('contenido')

</html>