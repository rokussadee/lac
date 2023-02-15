<div class="gazette-items">
    @isset($content)
        @foreach($content as $album)
            @include('partials.gazette-item', ['source'=>$album->source, 'title' =>$album->title, 'date' => $album->release_date, 'imagepath' =>$album->imagepath])
        @endforeach
    @endisset
</div>
