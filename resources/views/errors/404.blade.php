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
            <div class="p-2 text-lg rounded-md bg-white border-2 rounded-md shadow-md text-center">
                <h2 class="text-red-500">404 Error</h2>  {{ $exception->getMessage() }} <br />
                Click <a class="font-bold" href="{{route('dashboard')}}">here</a> to go back
            </div>
        </div>
    </body>
</html>