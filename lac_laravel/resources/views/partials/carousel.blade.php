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
    <figure class="carousel"
            x-ref="slider"
            @resize.window.debounce.500ms="checkSliderSize($el.scrollWidth, $el.offsetWidth)"
            x-intersect="checkSliderSize($el.scrollWidth, $el.offsetWidth)"
    >
        @foreach(json_decode($images) as $imgpath)
            <img
                class="carousel-image"
                src="{{asset("/assets/$imgpath")}}"
                x-transition
                @if($loop->first && ($loop->count > 1))
                x-intersect:leave="showPrev()"
                x-intersect.full="hidePrev(), showNext()"
                @elseif($loop->last && ($loop->count > 1))
                x-intersect:leave="showNext()"
                x-intersect.full="hideNext(), showPrev()"
                @elseif(!$loop->last && !$loop->first)
                x-intersect.threshold.50="showPrev(), showNext()"
                @endif
            >
        @endforeach
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
