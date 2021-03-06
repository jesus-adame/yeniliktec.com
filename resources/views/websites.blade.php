@extends('layouts.main')

@section('title', 'Desarrollo Web - YenilikTec')

@section('meta')
    <meta name="description" content="Ofrecemos servicios profesionales de Diseño Web, creación de landing pages, e-commerce, sistemas web y más."/>
    <meta name="keywords" content="Páginas web, Sistemas Web, Landig Pages, e-commerce"/>
    <meta name="robots" content="index, follow"/>
@endsection

@section('content')
    @include('shared.navbar')
    @include('components.breadcrumb')

    <main class="container mx-auto my-10">
        <article class="service">
            <div class="flex flex-wrap my-5 mx-4 items-center justify-around">
                <figure class="thumb w-full mb-8 md:mb-0 md:w-1/2">
                    <img loading="lazy" class="mx-auto rounded-lg" src="/images/web-design.png" alt="Diseño web" width="70%">
                </figure>
                <div class="content w-full p-4 md:w-1/2">
                    <h3 class="text-blue-900 mb-4 font-bold">Diseño Web</h3>
                    <p class="text-xl text-justify">
                        Ya sea que quieras tener tu primer sitio o quieras rediseñar el actual,
                        nosotros te podemos ayudar.
                    </p>
                    <p class="text-xl text-justify my-4">
                        Nos especializamos en sitios web intuitivos y ligeros que ayuden a tus usuarios a tener una
                        experiencia agradable y cómoda que dé una buena imagen de tu marca.
                    </p>
                </div>
            </div>
        </article>
        <article class="service">
            <div class="flex flex-wrap my-5 mx-4 items-center justify-around md:flex-row-reverse">
                <figure class="thumb w-full mb-8 md:mb-0 md:w-1/2">
                    <img loading="lazy" class="mx-auto" src="/images/thank-you.png" alt="Landing page" width="70%">
                </figure>
                <div class="content w-full p-4 md:w-1/2">
                    <h3 class="text-blue-900 mb-4 font-bold">Landing Page</h3>
                    <p class="text-xl text-justify">
                        Diseñamos paginas de captura. Con el fin de atraer a tu público,
                        recopilar información y cerrar ventas.
                    </p>
                </div>
            </div>
        </article>
        <article class="service">
            <div class="flex flex-wrap my-5 mx-4 items-center justify-around">
                <figure class="thumb w-full mb-8 md:mb-0 md:w-1/2">
                    <img loading="lazy" class="mx-auto" src="/images/website.png" alt="Websites" width="70%">
                </figure>
                <div class="content w-full p-4 md:w-1/2">
                    <h3 class="text-blue-900 mb-4 font-bold">Páginas Web</h3>
                    <p class="text-xl text-justify">
                        Si lo tuyo es crear una marca, también desarrollamos sitios web informativos,
                        con toda la información necesaria para dar a conocer tu negocio.
                    </p>
                    <p class="text-xl text-justify my-4">
                        Contamos con tecnologías actuales y sitios web responsivos, que se adaptan a cualquier
                        dispositivo.
                    </p>
                </div>
            </div>
        </article>
        <article class="service">
            <div class="flex flex-wrap my-5 mx-4 items-center justify-around md:flex-row-reverse">
                <figure class="thumb w-full mb-8 md:mb-0 md:w-1/2">
                    <img loading="lazy" class="mx-auto rounded-lg" src="/images/ecommerce.png" alt="E-commerce" width="70%">
                </figure>
                <div class="content w-full p-4 md:w-1/2">
                    <h3 class="text-blue-900 mb-4 font-bold">E-commerce</h3>
                    <p class="text-xl mb-4 text-justify">
                        Haz crecer tus ventas de manera exponencial con un e-commerce.
                        Si tu negocio lo permite, esta es la manera mas eficaz de generar ventas las 24 horas al día los 7 días de la semana.
                    </p>
                    <p class="text-xl my-4 text-justify">
                        Ofrecemos las últimas tecnologías y herramientas que te ayudarán a
                        dar un buen seguimiento a tus prospectos para cerrar ventas de manera digital.
                    </p>
                    <p class="text-xl my-4 text-justify">
                        Nosotros te asesoramos.
                    </p>
                </div>
            </div>
        </article>
        <article class="service">
            <div class="flex flex-wrap my-5 mx-4 items-center justify-around">
                <figure class="thumb w-full mb-8 md:mb-0 md:w-1/2">
                    <img loading="lazy" class="mx-auto" src="/images/sistemas-web.png" alt="Sistemas Web" width="70%">
                </figure>
                <div class="content w-full p-4 md:w-1/2">
                    <h3 class="text-blue-900 mb-4 font-bold">Sistemas Web</h3>
                    <p class="text-xl text-justify">
                        Creamos sistemas web a través de un análisis integral sobre la solución que mejor
                        se adapte a tu negocio.
                    </p>
                    <p class="text-xl text-justify my-4">
                        Ofrecemos desde sistemas operativos hasta financieros
                        (administradores de tareas, calendarios colaborativos, puntos de venta, sistemas contables, etc).
                    </p>
                    <p class="text-xl text-justify my-4">
                        Nos adaptamos al volumen de tu negocio, ofreciendo e integrando soluciones de manera rápita y
                        con una atención al cliente de manera execpcional los 7 días de la semana durante todo el año.
                    </p>
                </div>
            </div>
        </article>
        <div class="w-full text-center my-5">
            <a id="whats-web-development" href="https://wa.me/+525518040335" target="_blank" rel="nofollow"
                class="bg-blue-900 hover:bg-blue-800 text-white py-3 px-9 mx-auto rounded">SOLICITAR INFORMACIÓN</a>
        </div>
    </main>
    
    @include('shared.footer')
@endsection