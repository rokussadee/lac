<nav>
    <div>

    </div>
    <div class="navContent">
        <div>
            <img src="{{asset('/assets/logo.svg')}}">
        </div>
        <div class="linkContainer">
            <x-nav-link :href="route('programme')"
                        :active="str_contains(\Illuminate\Support\Facades\Route::currentRouteName(), 'programme')">
                {{__('programme')}}
            </x-nav-link>
            <x-nav-link :href="route('in residence')"
                        :active="str_contains(\Illuminate\Support\Facades\Route::currentRouteName(), 'in residence')">
                {{__('in')}}&nbsp;{{__('residence')}}
            </x-nav-link>
            <x-nav-link :href="route('artwork.gallery')"
                        :active="str_contains(\Illuminate\Support\Facades\Route::currentRouteName(), 'artwork')"
                {{--                        :active="str_starts_with(\Illuminate\Support\Facades\Route::currentRouteName(), 'artwork') ? 'activelink' : ''"--}}
            >
                {{__('artwork')}}
            </x-nav-link>
            <x-nav-link :href="route('archive.events')"
                        :active="str_contains(\Illuminate\Support\Facades\Route::currentRouteName(), 'archive')">
                {{__('archive')}}
            </x-nav-link>
            <x-nav-link :href="route('about us')"
                        :active="str_contains(\Illuminate\Support\Facades\Route::currentRouteName(), 'about us')">
                {{__('about')}}&nbsp;{{__('us')}}
            </x-nav-link>
            @auth()
                <x-nav-link :href="route('admin.events.index')"
                            :active="str_contains(\Illuminate\Support\Facades\Route::currentRouteName(), 'admin')">
                    {{__('admin')}}
                </x-nav-link>
            @endauth
        </div>
    </div>
    <div>
    </div>
</nav>
