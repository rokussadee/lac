<nav>
    <div></div>
    <div class="navContent">
        <div>
            <img src="{{asset('/assets/logo.svg')}}"></img>
        </div>
        <div class="">
            <x-nav-link :href="route('programme')" :active="request()->routeIs('programme')">
                {{__('programme')}}
            </x-nav-link>
            {{--            <x-nav-link :href="route('residence')" :active="request()->routeIs('residence')">--}}
            {{--                {{__('in residence')}}--}}
            {{--            </x-nav-link>--}}
            <div>
                <div><a href=""><h1>in&nbsp;residence</h1></a>
                </div>
            </div>
            <div>
                <div><a href=""><h1>artwork</h1></a>
                </div>
            </div>
            <div>
                <div><a href=""><h1>archive</h1></a>
                </div>
            </div>
            <div>
                <div><a href=""><h1>info</h1></a>
                </div>
            </div>
        </div>
    </div>
    <div></div>
</nav>
