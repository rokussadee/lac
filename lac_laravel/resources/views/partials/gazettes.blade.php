<div class="gazette-items">
    @if(isset($content))
        @foreach($content as $gazetteitem)
            @include('partials.gazette-item', ['source'=>$gazetteitem->source, 'title' =>$gazetteitem->title, 'date' => $gazetteitem->publication_date, 'imagepath' =>$gazetteitem->imagepath])
        @endforeach
    @endif
</div>
