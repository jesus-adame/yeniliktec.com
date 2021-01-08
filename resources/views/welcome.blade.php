<x-app-layout>
    {{-- <livewire:carousel></livewire:carousel> --}}

    @include('slider')

    <div class="container mx-auto text-center">
        <h1 class="text-xl my-4">YenilikTec</h1>

        <p>
            Agencia impulsada por la innovación y el conocimiento. Ayudamos a impulsar negocios en la era digital.
        </p>
    
        <div class="flex" style="height: 100px">
            <div class="w-1/3 h-3.5">Sitios Web</div>
            <div class="w-1/3 h-3.5">Redes Sociales</div>
            <div class="w-1/3 h-3.5">SEO Optimizaciones</div>
        </div>
    </div>

</x-app-layout>