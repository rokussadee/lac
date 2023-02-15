<div>
    @if(isset($description))
        <div>

            <h1>@if(isset($prefix))location: @endif{!!$description!!}</h1>
            @if(isset($doors))
                <h1>doors: {{$doors}}</h1>
            @endif
        </div>
    @endif
    @if(isset($link) && $link!='')
        <div>
            <a target="_blank" href="{{$link}}"><h1>tickets</h1></a>
        </div>
    @endisset
</div>
