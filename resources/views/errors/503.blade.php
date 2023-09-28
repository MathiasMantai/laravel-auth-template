<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="">
        <div class="h-[100dvh] flex flex-col grow justify-center items-center">
            <div class="p-6 text-lg rounded-md bg-white border-2 rounded-md shadow-md text-center">
                This Site is currently undergoing maintenance
            </div>
        </div>
    </body>
</html>