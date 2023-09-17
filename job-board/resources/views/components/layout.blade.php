<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel job Board</title>
        @vite(['resources/js/app.js','resources/css/app.css']) 

    </head>
    <body class="mx-auto mt-10 max-w-2xl text-slate-700 bg-gradient-to-r from-indigo-500 from-10% via-sky-100 via-30% to-emerald-100 to-90%">
        {{ $slot }}
    </body>
</html>
