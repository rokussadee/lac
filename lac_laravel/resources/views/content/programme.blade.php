@extends('layouts.app', ['title' => 'programme'])

@section('content')
    <div x-data="{activeTab: 0}"
         id="programme"
         class="grid"
    >
        @foreach($events as $event)
            <div
                :class="{'activelink' : activeTab === {{$loop->index}}}"
                class="right card @if($loop->first) border-top @endif"
            >
                <button @click="activeTab = {{$loop->index}}"
                        class="card-button">
                    @include('partials.card', ['title' => $event->title, 'date' => $event->date, 'date_to' => $event->date_to, 'category'  => $event->additional_category])
                </button>
            </div>
            <section x-show="activeTab === {{$loop->index}}"
                     x-data="showbuttons"
                     class="section desktopBorder section{{$loop->index}} sectioncontent"
                     style="display: {{$loop->index === 0 ? 'block' : 'none'}}">
                @include('partials.carousel', ['images' => $event->images, 'alt' => $event->title . ", les ateliers claus, " . $event->date->format('d/m/Y') ])
                @include('partials.section', ['event'=>$event, 'eventCount' => count($events)])
            </section>
            <div x-show="activeTab === {{$loop->index}}"
                 class="left card desktopBorder section{{$loop->index}} sectioncontent"
                 style="display: {{$loop->index === 0 ? 'block' : 'none'}}">
                @include('partials.infocard', ['description' => $event->location, 'doors' => $event->doors, 'link' => $event->tickets])
            </div>
            @if(isset($event->additional_description) && $event->additional_description !== '')
                <div class="additionalBorder"
                     style="grid-area: 2/1/span 1/span 1"
                     x-show="activeTab === {{$loop->index}}"
                ></div>
                <div x-show=" activeTab === {{$loop->index}}"
                     class="left card additional  section{{$loop->index}} sectioncontent"
                     style="display: {{$loop->index === 0 ? 'block' : 'none'}}">
                    @include('partials.additional', ['category' => $event->additional_category, 'description' => $event->additional_description, 'link' => $event->additional_link])
                </div>
            @endif
        @endforeach
    </div>

@endsection
