<article class="residenceContainer">

    {{--    style for longer descriptions    --}}
    {!! $description !!}
    @if(isset($links))
        @foreach(json_decode($links) as $link)
            <a style="margin-top: 10px; text-emphasis-color: red; display: inline-block;"
               href="{{$link}}">
                <p>{{ $link }}</p></a>
        @endforeach
    @endif

</article>

