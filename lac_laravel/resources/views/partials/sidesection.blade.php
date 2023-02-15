<article class="residenceContainer">

    {{--    style for longer descriptions    --}}
    {!! nl2br((Helper::parseText( $description))) !!}
    <div class="mediaContainer">
        @if(isset($links) && count(json_decode($links)) > 0)
            <div>
                <p>listen:</p>
                <div class="residence-links">
                    @foreach(json_decode($links) as $link)
                        {!! $link !!}
                    @endforeach
                </div>
            </div>
        @endif

        @if(isset($videos) && count(json_decode($videos)) > 0)
            <div>
                <p>watch:</p>
                <div class="residence-videos">
                    @foreach(json_decode($videos) as $videopath)
                        <div class="video-container">
                            @include('partials.video-content', ['videopath' =>$videopath])
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</article>
