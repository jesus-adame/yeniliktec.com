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
                    xfbml    : true,
                    version  : 'v9.0'
                });
                };

                (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            } (document, 'script', 'facebook-jssdk'));
        </script>
        <!-- Your Chat Plugin code -->
        <div class="fb-customerchat"
            attribution=setup_tool
            page_id="114960133481077"
            logged_in_greeting="¿Cómo puedo ayudarte?"
            logged_out_greeting="¿Cómo puedo ayudarte?">
        </div>
        {{-- endfile --}}
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

        {{-- whatsapp --}}
        <a
            class="py-3 p-4 rounded-full bg-green-500 hover:bg-green-600 fixed bottom-8 right-9 outline-none flex items-center content-center"
            style="width: 4.2rem; height: 4.2rem; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px"
            href="https://wa.me/message/6MJV3KNO7ZKZK1"
            target="_blank" rel="nofollow">
            <img src="/images/icons/whatsapp-brands.svg" alt="Whatsapp Brand">
        </a>
        {{-- messenger --}}
        <a
            class="py-3 p-4 rounded-full bg-blue-500 hover:bg-blue-600 fixed bottom-28 right-9 outline-none flex items-center content-center"
            style="width: 4.2rem; height: 4.2rem; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px"
            href="https://m.me/yeniliktec"
            target="_blank" rel="nofollow">
            <img src="/images/icons/facebook-messenger-brands.svg" alt="Whatsapp Brand">
        </a>
        @livewireScripts
    </body>
</html>
