@extends('layouts.app')

@section('title', 'Contacto - YenilikTec')

@section('meta')
<meta name="description" content="Contacto Yeniliktec | Agencia de Marketing Digital & Desarrollo Web."/>
<meta name="keywords" content="Contacto Yeniliktec"/>
<meta name="robots" content="index"/>
@endsection

@section('content')
@include('components.breadcrumb')
<div class="container mx-auto px-4 my-5">
    <div class="flex flex-wrap">
        <div class="md:w-1/2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.8092710947944!2d-99.24470158548607!3d18.93983456116105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cddf2b4feaa1b7%3A0xcce9bbd77d53f705!2sYeniliktec%20Agencia%20Digital!5e0!3m2!1ses-419!2smx!4v1626322467205!5m2!1ses-419!2smx" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="md:w-1/2 px-4">
            <h2 class="text-center">Déjanos un mensaje</h2>
            <p class="text-xl text-center my-6">
                Si tienes dudas acerca de los planes o paquetes que podemos ofrecerte, puedes contactarnos vía correo,
                whatsapp o directamente en nuestras redes sociales.
                Te atenderemos lo antes posible.
            </p>
            @if (session()->has('success'))
                <div class="p-4 text-green-900 bg-green-200 border-l-5 border-green-700">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form class="mx-auto mb-4 mt-5" action="/sendmail"
                method="post"
                onsubmit="gtag('event', 'enviar', {'event_category': 'contacto', 'event_label': 'formulario', value': '100'});">
                @csrf <input type="hidden" name="page" value="contact">
                <label class="hidden" for="name">Nombre</label>
                <input class="w-full mb-4 shadow border-none bg-gray-50" type="text" name="name" placeholder="Nombre">
                @error('name')
                    <p class="text-red-400">{{ $message }}</p>
                @enderror
                <label class="hidden" for="name">Correo</label>
                <input class="w-full mb-4 shadow border-none bg-gray-50" type="email" name="email" placeholder="E-mail">
                @error('email')
                    <p class="text-red-400">{{ $message }}</p>
                @enderror
                <label class="hidden" for="message">Mensaje</label>
                <textarea class="w-full mb-4 shadow border-none bg-gray-50" name="message" rows="3" placeholder="Mensaje"></textarea>
                @error('message')
                    <p class="text-red-400">{{ $message }}</p>
                @enderror
                <button class="bg-purple-900 my-4 px-6 py-2 uppercase w-full text-white shadow">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection