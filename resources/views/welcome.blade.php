<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Agregar los estilos de tailwind --}}
    @vite('resources/css/app.css')


    <title>Laravel</title>
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <h1 class="text-3xl font-bold underline">
        Espero que te guste Tailwind!
    </h1>
    <p>
        <a href="https://tailwindcss.com/"
            class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600">Documentación de Tailwind</a>
    </p>
</body>

</html>