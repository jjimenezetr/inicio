<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <a href="{{ route('login') }}">Iniciar Sesion</a>
        </div>
    </body>
</html>