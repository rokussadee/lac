<div
    class="right card border-top {{\Illuminate\Support\Facades\Route::currentRouteName() == 'artwork.gallery' ? 'activelink' : ''}}"
>
    <button
        onclick="location.href = '{{url('artwork/gallery')}}'"
        class="flex"
    >
        @include('partials.card', ['title' => 'gallery'])
    </button>
</div>
<div
    class="right card  {{\Illuminate\Support\Facades\Route::currentRouteName() == 'artwork.gazettes' ? 'activelink' : ''}}"
>
    <button
        onclick="location.href = '{{url('artwork/gazettes')}}'"
        class="flex"
    >
        @include('partials.card', ['title' => 'gazettes'])
    </button>
</div>
<div
    class="right card  {{\Illuminate\Support\Facades\Route::currentRouteName() == 'artwork.objects' ? 'activelink' : ''}}"
>
    <button
        onclick="location.href = '{{url('artwork/objects')}}'"
        class="flex"
    >
        @include('partials.card', ['title' => 'objects'])
    </button>
</div>
<div
    class="right card {{\Illuminate\Support\Facades\Route::currentRouteName() == 'artwork.albums' ? 'activelink' : ''}}"
    style="border-bottom: 1px solid black"
>
    <button
        onclick="location.href = '{{url('artwork/albums')}}'"
        class="flex"
    >
        @include('partials.card', ['title' => 'albums'])
    </button>
</div>
