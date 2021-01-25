<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>YenilikTec</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml   : true,
                    version : 'v9.0'
                });
            };
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            } (document, 'script', 'facebook-jssdk'));
        </script>

        <!-- Your Chat Plugin code -->
        <div class="fb-customerchat"
            attribution=setup_tool
            page_id="114960133481077"
            theme_color="#0A7CFF"
            logged_in_greeting="Hola, ¿Cómo puedo ayudarte?"
            logged_out_greeting="Hola, ¿Cómo puedo ayudarte?">
        </div>
        
        <x-jet-banner />

        <div class="min-h-screen flex flex-col bg-gray-100">
            <livewire:navbar/>
            
            <!-- Page Content -->
            <main class="flex-1">
                {{ $slot }}
            </main>

            <footer class=" p-4 bg-gray-900 text-center text-white block">
                {{ date('Y') }} YenilikTec.com | Todos los derechos reservados &copy;
            </footer>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
