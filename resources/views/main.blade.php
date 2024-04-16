<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Innovesta')</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <link
            rel="icon"
            type="image/svg"
            sizes="16x16"
            href="{{ asset('img/icons/favicon 16_16.svg') }} "
        />
        <link
            rel="icon"
            type="image/svg"
            sizes="32x32"
            href="{{ asset('img/icons/favicon 32_32.svg') }} "
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,800;0,900;1,800;1,900&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet" />
    </head>
    <body>
    @include('partials.modal')
    @include('partials.contact')

    <div class="container">
        @include('partials.header')
        @include('partials.adaptive-header')

        <main>
            @yield('content')
        </main>

    </div>

    @include('partials.footer')

    </body>
    <script src="{{ asset("js/index.js") }}"></script>
    <script src="{{ asset("js/productsPageTabs.js") }}"></script>
    <script src="{{ asset("js/application.js") }}"></script>
</html>
