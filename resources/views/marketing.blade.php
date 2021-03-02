@extends('layouts.app')

@section('content')
@include('components.breadcrumb')

<div class="container mx-auto my-10">
    <div class="service mb-3">
        <div class="flex flex-wrap my-4 mx-2 items-center justify-around">
            <div class="thumb w-full md:w-1/2">
                <img class="mx-auto" src="/images/socialmedia.png" alt="Social media" width="70%">
            </div>
            <div class="content w-full p-4 md:w-1/2">
                <h3 class="text-purple-900 pb-4 font-bold">Social Media Strategist</h3>
                <p class="text-xl text-justify">
                    Desarrollamos estrategias que te ayudarán a generar mayor
                    reconocimiento de marca a través de distintos canales de
                    medios y redes sociales.
                </p>
            </div>
        </div>
    </div>
    <div class="service mb-3">
        <div class="flex flex-wrap my-4 mx-2 items-center justify-around md:flex-row-reverse">
            <div class="thumb w-full md:w-1/2">
                <img class="mx-auto" src="/images/undraw_design_tools.svg" alt="Branding and design" width="70%">
            </div>
            <div class="content w-full p-4 md:w-1/2">
                <h3 class="text-purple-900 pb-4 font-bold">Branding</h3>
                <p class="text-xl text-justify">
                    Creamos imágenes corporativas por medio de nuestros especialistas.
                    Desarrollamos logos, banners y animaciones para que tu marca logre una
                    diferenciación autentica, por medio de una buena imagen y que
                    conecte con tu público objetivo.
                </p>
            </div>
        </div>
    </div>
    <div class="service mb-3">
        <div class="flex flex-wrap my-4 mx-2 items-center justify-around">
            <div class="thumb w-full md:w-1/2">
                <img class="mx-auto" src="/images/undraw_filter.svg" alt="Inbound Marketing" width="70%">
            </div>
            <div class="content w-full p-4 md:w-1/2">
                <h3 class="text-purple-900 pb-4 font-bold">Inbound Marketing</h3>
                <p class="text-xl text-justify">
                    Realizamos estrategias a la medida para la generación de clientes potenciales
                    por medio de embudos de ventas que te ayudaran a dar el seguimiento correcto a
                    tus posibles clientes hasta concretar una venta.
                </p>
            </div>
        </div>
    </div>
    <div class="service mb-3">
        <div class="flex flex-wrap my-4 mx-2 items-center justify-around md:flex-row-reverse">
            <div class="thumb w-full md:w-1/2">
                <img class="mx-auto rounded-lg" src="/images/community-manager.png" alt="Communty Manager" width="70%">
            </div>
            <div class="content w-full p-4 md:w-1/2">
                <h3 class="text-purple-900 pb-4 font-bold">Comunity Manager</h3>
                <p class="text-xl text-justify">
                    Ofrecemos servicios de implementación de estrategias de contenido en redes
                    sociales, con la finalidad de ayudar a crear una comunidad de seguidores de tu
                    marca, dándole al mismo tiempo autoría y voz ante la audiencia que quieras alcanzar. 
                </p>
            </div>
        </div>
    </div>
    <div class="service mb-3">
        <div class="flex flex-wrap my-4 mx-2 items-center justify-around">
            <div class="thumb w-full md:w-1/2">
                <img class="mx-auto" src="/images/undraw_search_engines.svg" alt="Seo & Sem" width="70%">
            </div>
            <div class="content w-full p-4 md:w-1/2">
                <h3 class="text-purple-900 pb-4 font-bold">Posicionamiento SEO & SEM</h3>
                <p class="text-xl text-justify">
                    Posicionamos tu sitio web en distintos motores de búsqueda por medio de
                    estrategias SEO combinado con campañas SEM. Esto ayudará a que tu público
                    te encuentre más rápido y fácil en Internet.
                </p>
            </div>
        </div>
    </div>
    <div class="service mb-3">
        <div class="flex flex-wrap my-4 mx-2 items-center justify-around md:flex-row-reverse">
            <div class="thumb w-full md:w-1/2">
                <img class="mx-auto rounded-lg" src="/images/google-analytics.png" alt="Analytics" width="70%">
            </div>
            <div class="content w-full p-4 md:w-1/2">
                <h3 class="text-purple-900 pb-4 font-bold">Analítica Web</h3>
                <p class="text-xl text-justify">
                    Nos importa el crecimiento de tu negocio mediante nuestros servicios,
                    por eso ofrecemos el servicio de analítica web, que a través de metodologías y
                    frameworks recopilará datos fundamentales de tus productos e inversiones publicitarias.
                </p>
                <p class="text-xl text-justify">
                    Esto servirá para medir de manera real y concreta la efectividad de tu empresa en medios digitales,
                    para así mejorar la toma de decisiones en el negocio o futuras campañas de marketing.
                </p>
            </div>
        </div>
    </div>
    <br>
    <div class="w-full text-center my-5">
        <a class="bg-purple-900 hover:bg-purple-700 text-white py-3 px-8 font-bold mx-auto" href="https://wa.me/527773447577" target="_blank">SOLICITAR INFORMACIÓN</a>
    </div>
</div>
@endsection