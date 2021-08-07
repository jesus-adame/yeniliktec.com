@extends('layouts.app')

@section('title', 'YenilikTec | Agencia de Marketing Digital & Desarrollo Web')

@section('meta')
<meta name="description" content="Agencia de Marketing Digital & Desarrollo Web enfocada en la innovación. Ayudamos a los negocios a integrarse y crecer en la era digital."/>
<meta name="keywords" content="Marketing digital, Agencia de Merketing, Desarrollo Web, Sistemas Web"/>
<meta name="robots" content="index, follow"/>
@endsection

@section('content')
<div class="banner">
    <div class="banner__content container mx-auto">
        <div class="md:w-1/2 mx-auto px-4">
            <h1 class="text-3xl md:text-5xl">AGENCIA DIGITAL DE MARKETING Y DESARROLLO WEB</h1>
            <a class="button w-1/2 md:w-1/3" href="https://wa.me/+52551804033" target="_blank">Cotizar</a>
        </div>
        <div class="figure md:w-1/2 mx-auto">
            <img src="/images/pc-design1.png" alt="Marketing" width="100%">
        </div>
    </div>
    <div class="banner__figure">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
        </svg>
    </div>
    <div class="py-7"></div>
</div>

<div class="container-sm text-center md:px-4">
    <h1 class="text-xl my-4 hidden">YenilikTec | Marketing Digital y Desarrollo Web</h1>
    <h3 class="text-blue-900 font-bold text-4xl pt-6 my-5">TE AYUDAMOS A INTEGRARTE AL MUNDO DIGITAL</h3>
</div>

<div class="container mx-auto my-20">
    <div class="flex flex-wrap items-center justify-around md:flex-row-reverse">
        <div class="flex-column md:w-1/2 px-2 md:px-0">
            <img src="/images/content-marketing.png" alt="Programación" width="100%">
        </div>
        <div class="flex-column md:w-1/2 p-8 shadow-lg">
            <div class="flex-1 mb-8">
                <h4 class="text-blue-900 my-4 text-4xl uppercase font-bold">Marketing Digital</h4>
                <div class="border-b-8 border-blue-900 w-1/3 mb-8"></div>
                <p class="text-xl font-semibold text-gray-700 my-2">Generación de contenido</p>
                <p class="text-xl font-semibold text-gray-700 my-2">Campañas en Google Ads</p>
                <p class="text-xl font-semibold text-gray-700 my-2">Campañas en Facebook Ads</p>
                <p class="text-xl font-semibold text-gray-700 my-2">Comunity Manager</p>
                <p class="text-xl font-semibold text-gray-700 my-2">Generación de contactos</p>
            </div>
            <a id="show-digital-marketing" class="block w-full text-center font-bold shadow m-auto py-3 px-9 bg-purple-900 hover:bg-purple-800 text-white" href="/marketing-digital">VER MÁS</a>
        </div>
    </div>
    <div class="flex flex-wrap items-center justify-around mt-10">
        <div class="flex-column md:w-1/2 px-5">
            <img class="w-full" src="/images/mockup-pc.png" alt="Programación">
        </div>
        <div class="flex-column md:w-1/2 p-8 shadow-lg">
            <div class="flex-1 mb-8">
                <h4 class="text-blue-900 my-4 text-4xl uppercase font-bold">Desarrollo web</h4>
                <div class="border-b-8 border-blue-900 w-1/3 mb-8"></div>
                <p class="text-xl font-semibold text-gray-700 my-2">Páginas web</p>
                <p class="text-xl font-semibold text-gray-700 my-2">Tiendas en linea</p>
                <p class="text-xl font-semibold text-gray-700 my-2">Páginas de captura</p>
                <p class="text-xl font-semibold text-gray-700 my-2">Blogs</p>
                <p class="text-xl font-semibold text-gray-700 my-2">Sistemas web</p>
            </div>
            <a id="show-web-development" class="block text-center font-bold shadow w-full py-3 px-9 bg-purple-900 hover:bg-purple-800 text-white" href="/sitios-web">VER MÁS</a>
        </div>
    </div>
</div>

<div class="relative overflow-hidden" style="background: #1B5197">
    <div class="container-sm relative z-10 text-white text-center my-20 mx-auto">
        <h3 class="text-2xl text-white font-bold">No desperdicies dinero en tratar de crear tus campañas publicitarias, mejor comunícate con nuestros especialistas, para que te puedan asesorar.</h3>
        <br><br>
        <p class="text-2xl mb-5">Sabemos que lo que mas te interesa para tu negocio es el tiempo de entrega de tu proyecto, por lo cual optimizamos nuestros tiempos de trabajo para que tus proyectos esten finalizados en el menor tiempo posible.</p>
        <p class="text-2xl">Si necesitas generar mayores ventas en tu negocio, pide informe acerca de nuestros servicios de estrategias de Inbound Marketing.</p>
    </div>
</div>

<div class="py-9"></div>

<div class="mx-auto px-5">
    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide flex items-center">
                    <img src="/images/carousel/amzn-ads.png" alt="Amazon Ads">
                </li>
                <li class="splide__slide flex items-center">
                    <img src="/images/carousel/analytics.png" alt="Google Analytics">
                </li>
                <li class="splide__slide flex items-center">
                    <img src="/images/carousel/datastudio.png" alt="Google Data Studio">
                </li>
                <li class="splide__slide flex items-center">
                    <img src="/images/carousel/doubleclick-search.png" alt="Double Click Search">
                </li>
                <li class="splide__slide flex items-center">
                    <img src="/images/carousel/facebook.png" alt="Facebook">
                </li>
                <li class="splide__slide flex items-center">
                    <img src="/images/carousel/amzn-ads.png" alt="Amazon Ads">
                </li>
                <li class="splide__slide flex items-center">
                    <img src="/images/carousel/google-ads.png" alt="Google Ads">
                </li>
                <li class="splide__slide flex items-center">
                    <img src="/images/carousel/linkedin.png" alt="LinkedIn">
                </li>
                <li class="splide__slide flex items-center">
                    <img src="/images/carousel/mailchimp.png" alt="Mailchimp">
                </li>
                <li class="splide__slide flex items-center">
                    <img src="/images/carousel/mercadoads.png" alt="Mercado Ads">
                </li>
                <li class="splide__slide flex items-center">
                    <img src="/images/carousel/twitter.png" alt="Twitter">
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="py-6"></div>

<div class="container-sm mx-auto my-14 py-14 text-center">
    <p class="py-5 text-2xl text-gray-700">
        Nos enfocamos mucho en ayudar a los emprendedores a hacer escalable su negocio por medio de nuestras herramientas y estrategias en el ámbito tecnológico.
    </p>

    <div class="py-6"></div>

    <p class="py-5 text-2xl text-gray-700">
        Estamos constantemente mejorando nuestras herramientas y estrategias, para ofrecerle un servicio con tecnologías vanguardistas a nuestros clientes.
    </p>
</div>

<div class="py-6"></div>

<div style="background: linear-gradient(146deg, rgba(2,0,36,1) 0%, rgba(36,36,112,1) 29%, rgb(0, 204, 255) 92%);">
    <div class="py-6"></div>
    <div class="container-sm text-center">
        <div class="py-9">
            <h2 class="text-white uppercase font-bold text-4xl pb-8">Beneficios</h2>
    
            <div class="flex justify-around items-center py-9 bg-gray-100 shadow-md">
                <div class="md:w-1/2 p-4 rounded-lg text-left leading-relaxed">
                    <p class="text-xl font-semibold my-4 text-gray-700"><span>&#10004;</span> Tiempo de Entrega</p>
                    <p class="text-xl font-semibold my-4 text-gray-700"><span>&#10004;</span> Soporte al Cliente</p>
                    <p class="text-xl font-semibold my-4 text-gray-700"><span>&#10004;</span> Soporte técnico 24/7</p>
                    <p class="text-xl font-semibold my-4 text-gray-700"><span>&#10004;</span> Desarrollo web ultra rápido</p>
                    <p class="text-xl font-semibold my-4 text-gray-700"><span>&#10004;</span> Servicio que está en la vanguardia con las nuevas tecnologías de desarrollo</p>
                </div>
                <div class="md:w-1/3 hidden sm:block">
                    <img src="/images/performance.png" alt="To the stars" width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="py-10"></div>
</div>
@endsection

@push('scripts')
<script>
	document.addEventListener('DOMContentLoaded', function () {
        let config = {
            perPage: 5,
            perMove: 1,
            height: '150px',
            rewind: true,
            autoplay: true,
            interval: 2000,
            arrows: false,
            pauseOnHover: false,
            speed: 500,
            gap: '3rem',
            pagination: false,
        }
		new Splide('.splide', config).mount();
	});
</script>
@endpush