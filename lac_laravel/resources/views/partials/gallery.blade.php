<div class="gallery-items">
    @foreach($content as $galleryitem)
        <div class="gallery-item">


            <section
                x-data="showbuttons"
                class="residenceSection section1 sectioncontent
{{--{{$loop->iteration + count($currentresidencies) == count($upcoming) + count($currentresidencies) ? 'resSectionLast' : ''}}--}}
                    "
            >
                <div class="titleBar residenceTitle">
                    <h1>in&nbsp;residence
                        /&nbsp;{{$galleryitem->title}}</h1>
                </div>
                <div class="bigCarousel">
                    @if($galleryitem->videos  !== null && $galleryitem->images  !== null)
                        @include('partials.sidecarousel', ['images' => $galleryitem->images,'videos' => $galleryitem->videos])
                    @elseif($galleryitem->images  !== null)
                        @include('partials.sidecarousel', ['images' => $galleryitem->images])
                    @elseif($galleryitem->videos  !== null)
                        @include('partials.sidecarousel', ['videos' => $galleryitem->videos])
                    @endif
                </div>

            </section>
            <div
                class="left card gallery-item-card desktopBorder sectioncontent "
                {{--            style="grid-row: {{$loop->index}}"--}}
            >
                @include('partials.infocard', ['description' => $galleryitem->description])
            </div>
        </div>
    @endforeach
</div>
