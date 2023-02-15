<div class="card-button">
    <div>
        <h1>{{$category}}</h1>
        <p>{!! $description !!}</p>
    </div>
    @if(isset($link))
        <div>
            <a target="_blank" href="{{$link}}"><h1>link</h1></a>
        </div>
    @endif
</div>
