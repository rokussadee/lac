<div
    @click="location.href = {{url('artwork.gallery')}}"
    class="right card border-top {{\Illuminate\Support\Facades\Route::currentRouteName() == 'artwork.gallery' ? 'activelink' : ''}}"
>
    @include('partials.card', ['title' => 'gallery'])
</div>
<div
    @click="location.href = {{url('artwork.gazettes')}}"
    class="right card mobileBottom {{\Illuminate\Support\Facades\Route::currentRouteName() == 'artwork.gazettes' ? 'activelink' : ''}}"
>
    @include('partials.card', ['title' => 'gazettes'])
</div>
<div
    @click="location.href = {{url('artwork.objects')}}"
    class="right card mobileBottom {{\Illuminate\Support\Facades\Route::currentRouteName() == 'artwork.objects' ? 'activelink' : ''}}"
>
    @include('partials.card', ['title' => 'objects'])
</div>
<div
    @click="location.href = {{url('artwork.albums')}}"
    class="right card mobileBottom {{\Illuminate\Support\Facades\Route::currentRouteName() == 'artwork.albums' ? 'activelink' : ''}}"
>
    @include('partials.card', ['title' => 'albums'])
</div>
