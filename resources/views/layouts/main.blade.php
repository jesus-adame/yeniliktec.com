<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex, nofollow"/>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- PLUGINS CSS STYLE -->
        <link rel="stylesheet" href="/theme/plugins/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="/theme/plugins/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="/theme/plugins/slick/slick.css">
        <link rel="stylesheet" href="/theme/plugins/slick/slick-theme.css">
        <link rel="stylesheet" href="/theme/plugins/fancybox/jquery.fancybox.min.css">
        <link rel="stylesheet" href="/theme/plugins/aos/aos.css">

        <!-- CUSTOM CSS -->
        <link href="/theme/css/style.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        @stack('scripts')

        @production
            @include('layouts.integrations')
        @endproduction
    </head>
    <body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
        @yield('content')
        {{-- whatsapp --}}
        <a
            class="z-20 py-3 p-3 rounded-full bg-green-500 hover:bg-green-600 fixed bottom-8 right-9 outline-none flex items-center content-center"
            style="width: 4.2rem; height: 4.2rem; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px"
            href="https://wa.me/+525518040335"
            target="_blank" rel="nofollow">
            <img src="/images/icons/whatsapp-brands.svg" alt="Whatsapp Brand">
        </a>
        {{-- messenger --}}
        <a
            class="z-20 py-3 p-3 rounded-full bg-blue-500 hover:bg-blue-600 fixed bottom-28 right-9 outline-none flex items-center content-center"
            style="width: 4.2rem; height: 4.2rem; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px"
            href="https://m.me/yeniliktec"
            target="_blank" rel="nofollow">
            <img src="/images/icons/facebook-messenger-brands.svg" alt="Facebook Brand">
        </a>
    </body>
</html>
