<x-app-layout>
    @include('components.breadcrumb')
    <div class="container mx-auto px-4">
        <p class="text-lg my-6">Si tienes dudas acerca de los planes o paquetes o podemos ofrecerte, puedes contactarnos vía correo, whatsapp o directamente en nuestras redes sociales.</p>
        @if(Session::has('success'))
            <div class="p-4 text-green-900 bg-green-200 border-l-5 border-green-700">
                {{ Session::get('success') }}
            </div>
        @endif   
        <form class="md:w-1/2 mx-auto mb-4" action="/sendmail" method="post">
            @csrf <input type="hidden" name="page" value="contact">
            <label for="name">Nombre</label>
            <input class="w-full shadow border-none" type="text" name="name">
            @error('name')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
            <label for="name">Correo</label>
            <input class="w-full shadow border-none" type="email" name="email">
            @error('email')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
            <label for="message">Mensaje</label>
            <textarea class="w-full shadow border-none" name="message" rows="3"></textarea>
            @error('message')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
            <button class="bg-purple-900 my-4 px-6 py-2 uppercase text-white shadow">Enviar</button>
        </form>
    </div>
</x-app-layout>