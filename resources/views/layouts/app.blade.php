<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>YenilikTec</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-SF9DVJ8LSW"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-SF9DVJ8LSW');
        </script>
    </head>
    <body class="font-sans antialiased cursor-default">
        <x-jet-banner />

        <div class="min-h-screen flex flex-col">
            <header class="header">
                <livewire:navbar/>
            </header>
            
            <!-- Page Content -->
            <main class="flex-1">
                {{ $slot }}
            </main>

            <footer class=" p-4 bg-gray-900 text-center text-white block">
                {{ date('Y') }} YenilikTec.com | Todos los derechos reservados &copy;
            </footer>
        </div>

        @stack('modals')

        {{-- whatsapp --}}
        <a
            class="z-20 py-3 p-4 rounded-full bg-green-500 hover:bg-green-600 fixed bottom-8 right-9 outline-none flex items-center content-center"
            style="width: 4.2rem; height: 4.2rem; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px"
            href="https://wa.me/message/6MJV3KNO7ZKZK1"
            target="_blank" rel="nofollow">
            <img src="/images/icons/whatsapp-brands.svg" alt="Whatsapp Brand">
        </a>
        {{-- messenger --}}
        <a
            class="z-20 py-3 p-4 rounded-full bg-blue-500 hover:bg-blue-600 fixed bottom-28 right-9 outline-none flex items-center content-center"
            style="width: 4.2rem; height: 4.2rem; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px"
            href="https://m.me/yeniliktec"
            target="_blank" rel="nofollow">
            <img src="/images/icons/facebook-messenger-brands.svg" alt="Facebook Brand">
        </a>
        @livewireScripts
    </body>
</html>
