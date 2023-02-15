<div
    class="right card border-top {{\Illuminate\Support\Facades\Route::currentRouteName() == 'archive.events' ? 'activelink' : ''}}"
>
    <button
        onclick="location.href = '{{url('archive/events')}}'"
        class="card-button"
    >
        @include('partials.card', ['title' => 'events'])
    </button>
</div>
<div
    class="right card  {{\Illuminate\Support\Facades\Route::currentRouteName() == 'archive.residencies' ? 'activelink' : ''}}"
    style="border-bottom: 1px solid black"

>
    <button
        onclick="location.href = '{{url('archive/residencies')}}'"
        class="card-button"
    >
        @include('partials.card', ['title' => 'residencies'])
    </button>
</div>
