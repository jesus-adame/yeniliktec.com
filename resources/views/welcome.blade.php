@extends('layouts.app')

@section('title', 'YenilikTec | Agencia de Marketing Digital & Desarrollo Web')

@section('meta')
<meta name="description" content="Agencia de Marketing Digital & Desarrollo Web enfocada en la innovación. Ayudamos a los negocios a integrarse y crecer en la era digital.">
@endsection

@section('content')
<div class="banner">
    <div class="banner__content container mx-auto">
        <div class="md:w-1/2 mx-auto px-4">
            <h1 class="text-3xl md:text-5xl">AGENCIA DIGITAL DE MARKETING Y DESARROLLO WEB</h1>
            <a class="button w-1/2 md:w-1/3" href="https://wa.me/message/6MJV3KNO7ZKZK1" target="_blank">Cotizar</a>
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
</div>

<div class="container-sm text-center md:px-4">
    <h1 class="text-xl my-4 hidden">YenilikTec | Marketing Digital y Desarrollo Web</h1>
    <h3 class="text-blue-900 font-bold text-4xl pt-6 my-5">TE AYUDAMOS A INTEGRARTE AL MUNDO DIGITAL</h3>
</div>

<div class="container mx-auto my-20">
    <div class="flex flex-wrap items-center justify-around">
        <div class="flex-column md:w-1/2 px-2 md:px-0">
            <img src="/images/content-marketing.png" alt="Programación" width="100%">
        </div>
        <div class="flex-column md:w-1/2 p-8 shadow-lg">
            <div class="flex-1 mb-8">
                <h4 class="text-blue-900 my-4 text-4xl uppercase font-bold">Marketing Digital</h4>
                <div class="border-b-8 border-blue-900 w-1/3 mb-8"></div>
                <p class="text-2xl">Generación de contenido</p>
                <p class="text-2xl">Campañas en Google Ads</p>
                <p class="text-2xl">Campañas en Facebook Ads</p>
                <p class="text-2xl">Comunity Manager</p>
                <p class="text-2xl">Generación de contactos</p>
            </div>
            <a class="block w-full text-center font-bold shadow m-auto py-3 px-9 bg-purple-900 hover:bg-purple-800 text-white" href="/marketing-digital">VER MÁS</a>
        </div>
    </div>
    <div class="flex flex-wrap items-center justify-around mt-10 md:flex-row-reverse">
        <div class="flex-column md:w-1/2 px-5">
            <img class="w-full" src="/images/mockup-pc.png" alt="Programación">
        </div>
        <div class="flex-column md:w-1/2 p-8 shadow-lg">
            <div class="flex-1 mb-8">
                <h4 class="text-blue-900 my-4 text-4xl uppercase font-bold">Desarrollo web</h4>
                <div class="border-b-8 border-blue-900 w-1/3 mb-8"></div>
                <p class="text-2xl">Páginas web</p>
                <p class="text-2xl">Tiendas en linea</p>
                <p class="text-2xl">Páginas de captura</p>
                <p class="text-2xl">Blogs</p>
                <p class="text-2xl">Sistemas web</p>
            </div>
            <a class="block text-center font-bold shadow w-full py-3 px-9 bg-purple-900 hover:bg-purple-800 text-white" href="/sitios-web">VER MÁS</a>
        </div>
    </div>
</div>

<div class="parallax-2 relative overflow-hidden">
    <div class="container-sm relative z-10 text-white text-center my-20 mx-auto">
        <h3 class="text-2xl text-white font-bold">No desperdicies dinero en tratar de crear tus campañas publicitarias, mejor comunícate con nuestros especialistas, para que te puedan asesorar.</h3>
        <br><br>
        <p class="text-2xl mb-5">Sabemos que lo que mas te interesa para tu negocio es el tiempo de entrega de tu proyecto, por lo cual optimizamos nuestros tiempos de trabajo para que tus proyectos esten finalizados en el menor tiempo posible.</p>
        <p class="text-2xl">Si necesitas generar mayores ventas en tu negocio, pide informe acerca de nuestros servicios de estrategias de Inbound Marketing.</p>
    </div>
</div>

<div class="container-sm mx-auto my-14 text-center">
    <p class="py-5 text-2xl">
        Nos enfocamos mucho en ayudar a los emprendedores a hacer escalable su negocio por medio de nuestras herramientas y estrategias en el ámbito tecnológico.
    </p>

    <p class="py-5 text-2xl">
        Estamos constantemente mejorando nuestras herramientas y estrategias, para ofrecerle un servicio con tecnologías vanguardistas a nuestros clientes.
    </p>
</div>

<div class="parallax-circuits">
    <div class="container-sm text-center">
        <div class="py-9">
            <h2 class="text-blue-900 uppercase font-bold text-4xl pb-8">Beneficios</h2>
    
            <div class="flex justify-around items-center py-10 bg-white">
                <div class="md:w-1/2 p-4 rounded-lg text-left leading-relaxed">
                    <p class="text-2xl"><span class="text-blue-800">&#10004;</span> Tiempo de Entrega</p>
                    <p class="text-2xl"><span class="text-blue-800">&#10004;</span> Soporte al Cliente</p>
                    <p class="text-2xl"><span class="text-blue-800">&#10004;</span> Soporte técnico 24/7</p>
                    <p class="text-2xl"><span class="text-blue-800">&#10004;</span> Desarrollo web ultra rápido</p>
                    <p class="text-2xl"><span class="text-blue-800">&#10004;</span> Servicio que está en la vanguardia con las nuevas tecnologías de desarrollo</p>
                </div>
                <div class="md:w-1/3 hidden sm:block">
                    <img src="/images/performance.png" alt="To the stars" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection