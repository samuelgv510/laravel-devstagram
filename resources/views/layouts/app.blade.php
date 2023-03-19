<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DevStagram - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <h1 class="text-4xl font-extrabold">@yield('titulo')</h1>       
        @yield('contenido')
        <hr>
        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </body>
</html>