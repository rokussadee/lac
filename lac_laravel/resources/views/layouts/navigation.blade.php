<nav>
    <div></div>
    <div class="navContent">
        <div>
            <img src="{{asset('/assets/logo.svg')}}">
        </div>
        <div class="linkContainer">
            <x-nav-link :href="route('programme')" :active="request()->routeIs('programme')">
                {{__('programme')}}
            </x-nav-link>
            <x-nav-link :href="route('in residence')" :active="request()->routeIs('in residence')">
                {{__('in')}}&nbsp;{{__('residence')}}
            </x-nav-link>
            <x-nav-link :href="route('artwork')" :active="request()->routeIs('artwork')">
                {{__('artwork')}}
            </x-nav-link>
            <x-nav-link :href="route('archive')" :active="request()->routeIs('archive')">
                {{__('archive')}}
            </x-nav-link>

            <x-nav-link class="animate-flicker wiggle" :href="route('about us')"
                        :active="request()->routeIs('about us')">
                {{__('about')}}&nbsp;{{__('us')}}
            </x-nav-link>
        </div>
    </div>
    <div></div>
</nav>
