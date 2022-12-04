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
                     x-transition--}}
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
                    <div>
                        <iframe
                            loading="lazy" ;
                            srcdoc="<style>
                          * {
                          padding: 0;
                          margin: 0;
                          overflow: hidden;
                          }

                          body, html {
                            width: 100%;
                          }

                          img{
                            position: absolute;
                            width: 100%;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            margin: 0;
                          }

                          svg {
                            position:absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            filter: drop-shadow(1px 1px 10px hsl(206.5, 70.7%, 8%));
                            transition: all 250ms ease-in-out;
                          }

                          body:hover svg {
                            filter: drop-shadow(1px 1px 10px hsl(206.5, 0%, 10%));
                          }
                        </style>
                        <a href='https://www.youtube.com/embed/{{$videopath}}?autoplay=1'>
                          <img src='https://img.youtube.com/vi/{{$videopath}}/hqdefault.jpg' alt='Coffee Recipe Javascript Project'>
                          <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 24 24' fill='none' stroke='#ffffff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-play-circle'><circle cx='12' cy='12' r='10'></circle><polygon points='10 8 16 12 10 16 10 8'></polygon></svg>
                        </a>
                        "
                            src="https://www.youtube.com/embed/{{$videopath}}"
                            title="Coffee Recipe Javascript Project"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                {{--                <iframe--}}
                {{--                    src="{{$videopath}}?rel=0&showinfo=0&autohide=1" loading="lazy" title="YouTube video player"--}}
                {{--                    frameborder="0"--}}
                {{--                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
                {{--                    allowfullscreen--}}
                {{--                    x-transition--}}
                {{--                    @if(isset($images))--}}
                {{--                    @if(!$loop->first)--}}
                {{--                    x-intersect.threshold.50="showPrev(), showNext()"--}}
                {{--                    @else--}}
                {{--                    x-intersect:leave="showPrev()"--}}
                {{--                    x-intersect.full="hidePrev(), showNext()"--}}
                {{--                    @endif--}}
                {{--                    @else--}}
                {{--                    @if($loop->first && $loop->count > 1)--}}
                {{--                    x-intersect:leave="showPrev()"--}}
                {{--                    x-intersect.full="hidePrev(), showNext()"--}}
                {{--                    @elseif($loop->last && $loop->count > 1)--}}
                {{--                    x-intersect:leave="showNext()"--}}
                {{--                    x-intersect.full="hideNext(), showPrev()"--}}
                {{--                    @elseif(!$loop->last && !$loop->first)--}}
                {{--                    x-intersect.threshold.50="showPrev(), showNext()"--}}
                {{--                    @endif--}}
                {{--                    @endif--}}
                {{--                ></iframe>--}}
            @endforeach
        @endisset
        @isset($images)
            @foreach(json_decode($images) as $imgpath)
                <img
                    class="carousel-image"
                    src="{{asset("/assets/$imgpath")}}"
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
