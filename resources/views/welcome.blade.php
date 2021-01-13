<x-app-layout>
    @include('components.slider')

    <div class="container mx-auto text-center px-4">
        <h1 class="text-xl my-4 hidden">YenilikTec | Marketing Digital y Desarrollo Web</h1>

        <h3 class="text-purple-900 font-bold text-4xl pt-8 my-10">TE AYUDAMOS A INTEGRARTE AL MUNDO DIGITAL</h3>

        <div class="border-b-8 border-purple-900 w-1/3 mx-auto"></div>

        {{-- <p>
            Somos una agencia impulsada por la innovación y el conocimiento. Ayudamos a impulsar negocios en la era digital.
        </p> --}}

        {{-- <p>        
            ¿Creas campañas publicitarias pero no te funcionan como desearas? Mejor pide asesoría,
            podemos ayudarte para hacer que tengas campañas publicitarias efectivas para tu negocio.
            Tener campañas de marketing digital para tu negocio, es de extrema importancia ya sea si vas empezando o no, todo negocio debe desarrollar una estrategia, por ello puedes preguntar por un plan personalizado que ayude a que crezca mas rápido tu negocio.
            Inbound Marketing
        </p> --}}

        {{-- Si tienes un proyecto pendiente de un sitio web para tu negocio, no lo pospongas mas, tenemos servicios a
            tu medida para el desarrollo de tu E-Commerce o Sitio Web --}}
            
        {{-- Si necesitas crear todo un proceso automatizado de ventas y captación de clientes, para generar mayores ingresos en tu negocio por medio de un embudo de negocio, contáctanos porque te podemos orientar. --}}

        <div class="flex flex-wrap justify-around items-center my-20">
            <div class="w-full md:w-1/3 text-2xl my-2">
                <img src="/images/marketing_digital.svg" alt="Marketing Digital">
                <h4 class="text-purple-900 my-4 text-3xl uppercase font-bold">Marketing Digital</h4>
                <p>Generación de contenido</p>
                <p>Campañas en Google Ads</p>
                <p>Campañas en Facebook Ads</p>
                <p>Comunity Manager</p>
                <p>Generación de contactos</p>
                <br>
                <a class="btn primary shadow py-3 px-9 bg-purple-900 text-white text-base" href="/marketing-digital">VER MÁS</a>
            </div>
            <div class="w-full md:w-1/3 text-2xl my-2">
                <img src="/images/desarrolloweb.svg" alt="Desarrollo web">
                <h4 class="text-purple-900 my-4 text-3xl uppercase font-bold">Desarrollo web</h4>
                <p>Páginas web</p>
                <p>Tiendas en linea</p>
                <p>Páginas de captura</p>
                <p>Blogs</p>
                <p>Sistemas web</p>
                <br>
                <a class="btn primary shadow py-3 px-9 bg-purple-900 text-white text-base" href="/sitios-web">VER MÁS</a>
            </div>
            {{-- <div class="w-full md:w-1/3 text-2xl my-2">
                <img src="/images/servicios_tecnologicos.svg" alt="Servicios Tecnológicos">
                <h4 class="text-purple-900 my-4 text-3xl uppercase font-bold">Servicios Tecnológicos</h4>
                <p>Administración de Base de Datos</p>
                <p>Manejo de software de terceros</p>
                <p>Administración de servidores</p>
                <p>Soporte técnico</p>
                <br>
                <a class="btn primary shadow py-3 px-9 bg-purple-900 text-white text-base" href="/servicios">VER MÁS</a>
            </div> --}}
        </div>

        <h3 class="my-10 text-2xl text-purple-900 font-bold">No desperdicies dinero en tratar de crear tus campañas publicitarias, mejor comunícate con nuestros especialistas, para que te puedan asesorar.</h3>
        <p class="text-lg">Sabemos que lo que mas te interesa para tu negocio es el tiempo de entrega de tu proyecto, por lo cual optimizamos nuestros tiempos de trabajo para que tus proyectos esten finalizados en el menor tiempo posible.</p>
        <p class="text-lg">Si necesitas generar mayores ventas en tu negocio, pide informe acerca de nuestros servicios de estrategias de Inbound Marketing.</p>
        
        <div class="my-10 text-2xl">
            <h2 class="text-purple-900 uppercase font-bold text-4xl pt-8 my-10">Beneficios</h2>
            <div class="border-b-8 border-purple-900 w-1/3 mx-auto mb-2"></div>

            <div class="flex justify-between items-center">
                <div class="text-left leading-relaxed">
                    <p><span class="text-purple-800">&#10004;</span> Tiempo de Entrega</p>
                    <p><span class="text-purple-800">&#10004;</span> Soporte al Cliente</p>
                    <p><span class="text-purple-800">&#10004;</span> Soporte técnico 24/7</p>
                    <p><span class="text-purple-800">&#10004;</span> Desarrollo web ultra rápido</p>
                    <p><span class="text-purple-800">&#10004;</span> Servicio que está en la vanguardia con las nuevas tecnologías de desarrollo</p>
                </div>
                <div class="sm:w-1/2 hidden sm:block">
                    <img src="/images/undraw_to_the_stars.svg" alt="To the stars">
                </div>
            </div>
        </div>
    </div>

    <div class="contact bg-gray-600 py-5 text-white">
        <div class="container px-2 m-auto">
            <h3 class="uppercase text-2xl py-2">CONTACTO</h3>
            <div class="border-b-4 border-white w-1/3"></div> 

            <div class="flex flex-wrap mt-5">
                <div class="md:w-1/2">
                    <p>Si tienes dudas acerca de los planes o paquetes o podemos ofrecerte,</p>
                    <p>puedes contactarnos vía correo, whatsapp o directamente en nuestras redes sociales.</p>
                    <br><br>
                    <p>Address: Cuernavaca Morelos</p>
                    <p><a class="hover:underline" href="tel:+527773447577">Phone: +52 777 344 7577</a></p>
                    <p><a class="hover:underline" href="mailto:contacto@yeniliktec.com">Email Address: contacto@yeniliktec.com</a></p>
                </div>
                <div id="contacto" class="w-full md:w-1/2">
                    @if(Session::has('success'))
                        <div class="p-4 mb-2 text-green-900 bg-green-200 border-l-8 border-green-700">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <form class="mx-auto mb-4" action="/sendmail" method="post">
                        @csrf <input type="hidden" name="page" value="welcome">
                        <div class="flex justify-between">
                            <div class="w-1/2">
                                <label for="name">Nombre</label>
                                <input class="text-gray-900 w-full" type="text" name="name">
                                @error('name')
                                    <p class="text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-1/2 ml-2">
                                <label for="name">Correo</label>
                                <input class="text-gray-900 w-full" type="email" name="email" placeholder="@">
                                @error('email')
                                    <p class="text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <label for="message">Mensaje</label>
                        <textarea class="w-full text-gray-900" name="message" rows="3"></textarea>
                        @error('message')
                            <p class="text-red-400">{{ $message }}</p>
                        @enderror
                        <button class="bg-purple-900 my-4 px-6 py-2 uppercase text-white">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>