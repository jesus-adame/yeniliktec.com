@extends('layouts.main')

@section('title', 'Marketing Digital - YenilikTec')

@section('meta')
    <meta name="description" content="Servicios de Marketing Digital en Cuernavaca Morelos con SEO, SEM, estratégias de redes sociales y más."/>
    <meta name="keywords" content="Social Media Strategist, Branding, Community Manager, Analítica Web, Seo y sem"/>
    <meta name="robots" content="index, follow"/>
@endsection

@section('content')
    @include('shared.navbar')
    @include('components.breadcrumb', ['title' => 'Quienes Somos'])

    <div class="container mx-auto my-10">
        <article class="text-center">
            <h2>Misión</h2>
            <p>
                Nuestra misión es poder ayudar a
                emprendedores a mudar su negocio al mundo 
                digital y así puedan expandirse de manera
                exponencial
            </p>
        </article>
        <br>
        <article class="text-center">
            <h2>Visión</h2>
            <p>
                Ser un equipo de trabajo de alto rendimiento, 
                que sea reconocido a nivel internacional por ser 
                una de las pocas Agencias que si se preocupan 
                por la evolución y desarrollo de los negocios de 
                nuestros clientes.
            </p>
        </article>
        <br><br>
        
        <h2 class="text-center">Nuestro equipo</h2>
        <br>

        <article class="flex items-center mb-4">
            <figure class="w-24 rounded-full overflow-hidden">
                <img loading="lazy" class="w-full" src="/images/personal/jesus-adame.jpg" alt="Jesús Adame">
            </figure>
            <div class="content w-3/4 px-4">
                <h3>FULLSTACK WEB DEVELOPER - ASESOR DE TI</h3>
                <p>
                    Llevo mas de 4 años liderando y desarrollando proyectos de software, he trabajado 
                    en empresas reconocidas internacionalmente, en las que he ayudado a construir y 
                    consolidar su departamento de TI seleccionando las tecnologías más actuales, 
                    desarrollado proyectos de impacto directo en las organizaciones.
                </p>
            </div>
        </article>
        <article class="flex items-center mb-4">
            <figure class="w-24 rounded-full overflow-hidden">
                <img loading="lazy" class="w-full" src="/images/personal/ruben-adame.png" alt="Rubén Adame">
            </figure>
            <div class="content w-3/4 px-4">
                <h3>DIGITAL MARKETER - WEB DEVELOPER</h3>
                <p>
                    Me centro mucho en creación de campañas publicitarias estratégicas 
                    automatizadas que ayuden a crecer distintas empresas y negocios en el ámbito 
                    digital para poder llegar a su audiencia correcta y puedan ofrecer su producto o 
                    servicio con la mayor efectividad posible dentro de su mercado.
                </p>
            </div>
        </article>
        <div class="flex items-center mb-4">
            <figure class="w-24 rounded-full overflow-hidden">
                <img loading="lazy" class="w-full" src="/images/personal/luis-figueroa.png" alt="Luis Figueroa">
            </figure>
            <div class="content w-3/4 px-4">
                <h3>DIGITAL MARKETER - WEB DEVELOPER</h3>
                <p>
                    Cuando se trata de estrategias para negocios y diferentes empresas es ahí donde 
                    inicia todo. Soy un estratega y diseñador que ayuda a nuestros clientes a través de 
                    asesorías y planeaciones estratégicas para diferentes tamaños de negocios. Los 
                    guio y ayudo en cada proceso de sus campañas en Social Media e Inbound 
                    Marketing con la finalidad de alcanzar sus objetivos y audiencia deseada, con 
                    resultados medibles y alcanzables, así como también campañas publicitarias con 
                    las nuevas tecnologías de la actualidad.
                </p>
            </div>
        </div>
    </div>
    <br>

    @include('shared.footer')
@endsection