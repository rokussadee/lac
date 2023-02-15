<form wire:submit.prevent="save()">
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
                x-intersect="
            checkSliderSize($el.scrollWidth, $el.offsetWidth)
{{--                checkSliderSize($refs.carousel.clientWidth, $el.scrollWidth)--}}
                {{--                alert($el.scrollWidth), alert($el.offsetWidth)--}}
                    "

        >
            @if($images > 0)
                @foreach($images as $imgpath)
                    <div
                        style="position:relative; overflow: hidden"
                        class="carousel-image"
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
                        <img

                            style="width: 100%; height: 100%; object-fit: cover;"
                            alt="{{$alt}}"
                            src="{{asset("/storage/images/$imgpath")}}"
                        >
                        <button
                            style="position:absolute; right: 10px; background: white"
                            class="delete-button"
                            wire:click="deletePhoto({{$loop->index}})"
                        >
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                @endforeach
            @endif
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
    <br><label>Select the accompanying images</label>
    <br><input type="file" wire:model.lazy="images" multiple/>
    <button type="submit">save</button>
    <div wire:loading wire:target="images">Uploading...</div>
</form>
@if(session()->has('message'))
    <span>
            <small style="color: black;">
                {{session('message')}}
            </small>
        </span>
@endif
@error('images.*')
<span>
            <small>
                {{ $message }}
            </small>
        </span>
@enderror
