<x-app-layout>
    @include('components.breadcrumb')

    <div class="container mx-auto my-10">
        <div class="service">
            <div class="flex flex-wrap my-4 mx-2 items-center justify-around">
                <div class="thumb w-full md:w-1/2">
                    <img class="mx-auto" src="/images/undraw_social_influencer.svg" alt="Sistemas Web" width="60%">
                </div>
                <div class="content w-full md:w-1/2">
                    <h3 class="text-purple-900">Social Media</h3>
                    <p class="text-xl">
                        Desarrollamos tu estratégia en medios sociales para generar un mayor reconocimiento de tu marca.
                    </p>
                </div>
            </div>
        </div>
        <div class="service">
            <div class="flex flex-wrap my-4 mx-2 items-center justify-around">
                <div class="content w-full md:w-1/2">
                    <h3 class="text-purple-900">Branding</h3>
                    <p class="text-xl">Creamos tu imagen corporativa por medio de nuestros especialistas. Logotipo, isotipo, colores y slogan.</p>
                </div>
                <div class="thumb w-full md:w-1/2">
                    <img class="mx-auto" src="/images/undraw_design_tools.svg" alt="Sistemas Web" width="60%">
                </div>
            </div>
        </div>
        <div class="service">
            <div class="flex flex-wrap my-4 mx-2 items-center justify-around">
                <div class="thumb w-full md:w-1/2">
                    <img class="mx-auto" src="/images/undraw_filter.svg" alt="Sistemas Web" width="60%">
                </div>
                <div class="content w-full md:w-1/2">
                    <h3 class="text-purple-900">Inbound Marketing</h3>
                    <p class="text-xl">Desarrollamos estratégias a la medida para la generación de clientes potenciales por medio de embudos de ventas.</p>
                </div>
            </div>
        </div>
        <div class="service">
            <div class="flex flex-wrap my-4 mx-2 items-center justify-around">
                <div class="content w-full md:w-1/2">
                    <h3 class="text-purple-900">Posicionamiento SEO & SEM</h3>
                    <p class="text-xl">Si lo tuyo es crear una marca, también desarrollamos sitios web informativos, con toda la información necesaria para dar a conocer tu negocio.</p>
                </div>
                <div class="thumb w-full md:w-1/2">
                    <img class="mx-auto" src="/images/undraw_search_engines.svg" alt="Sistemas Web" width="60%">
                </div>
            </div>
        </div>
        <div class="w-full text-center my-5">
            <a class="bg-purple-900 text-white py-4 px-9 mx-auto" href="https://wa.me/527773447577" target="_blank">COTIZAR</a>
        </div>
    </div>
</x-app-layout>