<a href="{{$source}}" target="_blank" class="gazette-item">
    <div class="overlay">
        <div class="overlaytext">
            <h2>{{$title}}</h2>
            {{--                        @dd($gazetteitem->publication_date)--}}
            <small>{!! Helper::dateToString($publication_date) !!}</small>
            {{--                        <div class="gazette-description">--}}
            {{--                            {!! $gazetteitem->description !!}--}}
            {{--                        </div>--}}
            {{--                        <button class="readmore">Read description...</button>--}}
        </div>
    </div>
    <figure>
        <img src="{{asset("assets/$imagepath") }}" alt="{{$title}}">
    </figure>
</a>
