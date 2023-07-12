<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="h-[100dvh] bg-slate-200 flex flex-col">
            <x-layout.header_guest />
            @yield('content')
            <x-layout.footer />
        </div>
    </body>
</html>