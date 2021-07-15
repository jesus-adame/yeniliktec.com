<x-guest-layout>
    <div class="pt-4 bg-blue-200">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <img class="h-32 w-32 rounded-full bg-gray-900 block" src="/images/logo_yeniliktec_blanco.svg" alt="Yeniliktec Logo">
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $policy !!}
            </div>
        </div>
    </div>
</x-guest-layout>
