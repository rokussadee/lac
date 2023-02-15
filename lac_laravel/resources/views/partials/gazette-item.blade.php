<a href="{{$source}}" target="_blank" class="gazette-item">
    <div class="overlay">
        <div class="overlaytext">
            <h2>{{$title}}</h2>
            <small>{!! Helper::dateToString($date) !!}</small>
        </div>
    </div>
    <figure>
        <img src="{{asset("storage/images/$imagepath") }}" alt="{{$title}}">
    </figure>
</a>
