<div class="gallery-items">
    @foreach($content as $galleryitem)
        <div class="gallery-item">
            <div
                class="left card gallery-item-card desktopBorder sectioncontent "
                {{--            style="grid-row: {{$loop->index}}"--}}
            >
                @include('partials.infocard', ['description' => $galleryitem->description])
            </div>

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

                @include('partials.carousel', ['images' => $galleryitem->images])

            </section>
        </div>
    @endforeach
</div>
