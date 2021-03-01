@extends('layouts.app')

@section('content')
@include('components.breadcrumb')
<div class="container-sm mx-auto px-4">
    <p class="text-xl text-center my-6">
        Si tienes dudas acerca de los planes o paquetes que podemos ofrecerte, puedes contactarnos vía correo, whatsapp o directamente en nuestras redes sociales.
        Te atenderemos lo antes posible.
    </p>
    @if(Session::has('success'))
        <div class="p-4 text-green-900 bg-green-200 border-l-5 border-green-700">
            {{ Session::get('success') }}
        </div>
    @endif   
    <form class="md:w-1/2 mx-auto mb-4" action="/sendmail" method="post">
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
@endsection