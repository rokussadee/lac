<div class="scrollContainer"
     x-data="carousel"
     x-ref="carousel"
>
    <button
        x-cloak
        @click="prev"
        class="prevButton"
        x-show="prevVisible"
        x-ref="prevButton"
        x-transition.duration.200ms
    >
      <span class="material-symbols-outlined" style="transform: rotate(180deg)">
arrow_forward_ios
</span>
    </button>
    <figure class="sidecarousel"
            x-ref="slider"
            @resize.window.debounce.500ms="checkSliderSize($el.scrollWidth, $el.offsetWidth)"
            x-intersect="checkSliderSize($el.scrollWidth, $el.offsetWidth)"
    >
        @isset($videos)
            @foreach(json_decode($videos) as $videopath)
                <div class="video-container"
                     x-transition
                     @if(isset($images))
                     @if(!$loop->first)
                     x-intersect.threshold.50="showPrev(), showNext()"
                     @else
                     x-intersect:leave="showPrev()"
                     x-intersect.full="hidePrev(), showNext()"
                     @endif
                     @else
                     @if($loop->first && $loop->count > 1)
                     x-intersect:leave="showPrev()"
                     x-intersect.full="hidePrev(), showNext()"
                     @elseif($loop->last && $loop->count > 1)
                     x-intersect:leave="showNext()"
                     x-intersect.full="hideNext(), showPrev()"
                     @elseif(!$loop->last && !$loop->first)
                     x-intersect.threshold.50="showPrev(), showNext()"
                    @endif
                    @endif
                >
                    @include('partials.video-content', ['videopath' => $videopath])
                </div>
            @endforeach
        @endisset
        @isset($images)
            @foreach(json_decode($images) as $imgpath)
                <img
                    class="carousel-image"
                    src="{{asset("/storage/images/$imgpath")}}"
                    x-transition
                    @if(isset($videos))
                    @if(!$loop->last)
                    x-intersect.threshold.50="showPrev(), showNext()"
                    @else
                    x-intersect:leave="showNext()"
                    x-intersect.full="hideNext(), showPrev()"
                    @endif
                    @else
                    @if($loop->first && $loop->count > 1)
                    x-intersect:leave="showPrev()"
                    x-intersect.full="hidePrev(), showNext()"
                    @elseif($loop->last && $loop->count > 1)
                    x-intersect:leave="showNext()"
                    x-intersect.full="hideNext(), showPrev()"
                    @elseif(!$loop->last && !$loop->first)
                    x-intersect.threshold.50="showPrev(), showNext()"
                    @endif
                    @endif
                >
            @endforeach
        @endisset
    </figure>
    <button
        x-cloak
        @click="next"
        class="nextButton"
        x-show="nextVisible"
        x-ref="nextButton"
        x-transition.duration.200ms

    >
        <span class="material-symbols-outlined">
arrow_forward_ios
</span>
    </button>
</div>
