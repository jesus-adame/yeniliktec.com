<div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden bg-gray-800">
    <div class="pt-2 pb-3 space-y-1 text-white">
        @if (Auth::user())
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        @endif
        <x-jet-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
            Inicio
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('marketing') }}" :active="request()->routeIs('marketing')">
            Marketing Digital
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('websites') }}" :active="request()->routeIs('websites')">
            Sitios Web
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('blog') }}" :active="request()->routeIs('blog')">
            Blog
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
            Contacto
        </x-jet-responsive-nav-link>
    </div>

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">
        @if (Auth::user())
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif
                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>
        @endif

        @if (Auth::user())
            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                <x-jet-responsive-nav-link href="{{ route('posts.create') }}">
                    Publicar Entrada
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-responsive-nav-link>
                </form>
            </div>
        @endif
    </div>
</div>