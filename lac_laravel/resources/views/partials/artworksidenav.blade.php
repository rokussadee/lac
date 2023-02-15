<div
    class="right card border-top {{\Illuminate\Support\Facades\Route::currentRouteName() == 'artwork.gallery' ? 'activelink' : ''}}"
>
    <button
        onclick="location.href = '{{url('artwork/gallery')}}'"
        class="card-button"
    >
        @include('partials.card', ['title' => 'gallery'])
    </button>
</div>
<div
    class="right card  {{\Illuminate\Support\Facades\Route::currentRouteName() == 'artwork.gazettes' ? 'activelink' : ''}}"
>
    <button
        onclick="location.href = '{{url('artwork/gazettes')}}'"
        class="card-button"
    >
        @include('partials.card', ['title' => 'gazettes'])
    </button>
</div>
<div
    class="right card {{\Illuminate\Support\Facades\Route::currentRouteName() == 'artwork.albums' ? 'activelink' : ''}}"
    style="border-bottom: 1px solid black"
>
    <button
        onclick="location.href = '{{url('artwork/albums')}}'"
        class="card-button"
    >
        @include('partials.card', ['title' => 'albums'])
    </button>
</div>
