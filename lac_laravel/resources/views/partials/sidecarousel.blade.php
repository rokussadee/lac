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

                          button, span {
                            position:absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            filter: drop-shadow(1px 1px 10px hsl(206.5, 70.7%, 8%));
                            transition: all 250ms ease-in-out;
                          }

                          body:hover button, span {
                            filter: drop-shadow(1px 1px 10px hsl(206.5, 0%, 10%));
                          }
                        </style>
                        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0' />
                        <a href='https://www.youtube.com/embed/{{$videopath}}?autoplay=1'>
                              <img src='https://img.youtube.com/vi/{{$videopath}}/hqdefault.jpg' alt='Coffee Recipe Javascript Project'>
                              <button style='width: 45px; height: 33.5px; color:black; background:white; border: 1px solid black;'>
                              <span style='font-size: 30px; display:block;overflow:hidden; margin: 0;' class='material-symbols-outlined'>
                            play_arrow
                            </span>
                              </button>
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
