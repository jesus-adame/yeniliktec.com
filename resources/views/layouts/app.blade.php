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
        
        <div class="min-h-screen flex flex-col">
            <header class="header">
                <livewire:navbar/>
            </header>
            
            <!-- Page Content -->
            <main class="flex-1">
                @yield('content')
            </main>

            <footer>
                <div class="contact bg-gray-700 py-5 text-white">
                    <div class="container px-2 m-auto">            
                        <div class="flex justify-between flex-wrap mt-2">
                            <div class="md:w-1/3 px-5">
                                <img src="/images/logo_yeniliktec_lg.png" alt="Yeniliktec Logo" class="w-full">
                            </div>
                            <div class="w-full md:w-1/3">
                                <h3 class="uppercase font-bold text-2xl py-2">CONTACTO</h3>
                                <div class="border-b-4 border-white w-24 mb-5"></div>
                                <address>Cuernavaca Morelos, México.</address>
                                <p><a class="hover:underline" href="tel:+525518040335">Teléfono: +52 55 1804 0335</a></p>
                                <p><a class="hover:underline" href="mailto:contacto@yeniliktec.com">Email Address: contacto@yeniliktec.com</a></p>
                                <div class="flex mt-5">
                                    <a class="p-4 px-4 mr-3 bg-pink-600 hover:bg-pink-700 rounded-full" href="https://www.instagram.com/yeniliktec/" rel="nofollow" target="_blank">
                                        <div class="w-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                        </div>
                                    </a>
                                    <a class="py-4 px-5 bg-blue-600 hover:bg-blue-700 rounded-full" href="https://www.facebook.com/yeniliktec" rel="nofollow" target="_blank">
                                        <div class="w-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4 bg-gray-800 text-center text-white block">
                    {{ date('Y') }} YenilikTec.com | Todos los derechos reservados &copy;
                </div>
            </footer>
        </div>

        @stack('modals')

        {{-- whatsapp --}}
        <a
            class="z-20 py-3 p-4 rounded-full bg-green-500 hover:bg-green-600 fixed bottom-8 right-9 outline-none flex items-center content-center"
            style="width: 4.2rem; height: 4.2rem; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px"
            href="https://wa.me/+525518040335"
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
