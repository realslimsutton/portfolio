<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        />

        <title>Kieron Sutton | Personal Portfolio</title>

        <link
            rel="preconnect"
            href="https://fonts.googleapis.com"
        />

        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin
        />

        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Lobster:wght@400&display=swap"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="{{mix('css/app.css')}}">

        <script
            src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"
            defer
        ></script>
        <script src="https://unpkg.com/alpinejs" defer></script>
        <script src="https://unpkg.com/typeit@8.3.3/dist/index.umd.js" defer></script>
        <script src="{{mix('js/app.js')}}" defer></script>
    </head>
    <body class="bg-white antialiased text-neutral-900">
        <x-header/>

        <div class="h-screen w-full flex items-center justify-center">
            @yield('content')
        </div>
    </body>
</html>