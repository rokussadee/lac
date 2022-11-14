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
            <x-nav-link :href="route('about us')" :active="request()->routeIs('about us')">
                {{__('about us')}}
            </x-nav-link>
        </div>
    </div>
    <div></div>
</nav>
