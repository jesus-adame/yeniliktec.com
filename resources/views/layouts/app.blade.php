<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')

        <title>@yield('title', 'YenilikTec')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
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

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        @stack('scripts')

        @production
            @include('layouts.integrations')
        @endproduction
    </head>
    <body class="font-sans antialiased cursor-default">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VH2MMG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        @include('shared.navbar')
        
        <div class="min-h-screen flex flex-col">
            
            <!-- Page Content -->
            <main class="flex-1">
                @yield('content')
            </main>

            @include('shared.footer')
        </div>

        @stack('modals')

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
        @livewireScripts
    </body>
</html>
