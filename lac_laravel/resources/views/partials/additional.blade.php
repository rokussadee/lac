<div class="flex">
    <div>
        <h1>{{$category}}</h1>
        <p>{!! $description !!}</p>
    </div>
    @if(isset($link))
        <div>
            <a href="{{$link}}"><h1>link</h1></a>
        </div>
    @endif
</div>
