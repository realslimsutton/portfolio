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

        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="{{asset('apple-touch-icon.png')}}"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="{{asset('favicon-32x32.png')}}"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{asset('favicon-16x16.png')}}"
        />
        <link
            rel="manifest"
            href="{{asset('site.webmanifest')}}"
        />
        <link
            rel="mask-icon"
            href="{{asset('safari-pinned-tab.svg')}}"
            color="#5bbad5"
        />

        <meta
            name="msapplication-TileColor"
            content="#ffffff"
        />
        <meta
            name="theme-color"
            content="#ffffff"
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

        @yield('scripts')

        @production
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-9SQ4BQESXC"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }

                gtag('js', new Date());

                gtag('config', 'G-9SQ4BQESXC');
            </script>
        @endproduction
    </head>
    <body class="bg-white antialiased text-neutral-900">
        <x-header/>

        <div
            id="page-wrapper"
            @if(!isset($noMargin) || $noMargin)
            class="w-full flex items-center justify-center"
            @else
            class="w-full flex items-center justify-center mt-12 md:mt-0"
            @endif
        >
            <div
                class="container mx-auto flex items-center justify-between px-6 py-6"
            >
                @yield('content')
            </div>
        </div>
    </body>
</html>
