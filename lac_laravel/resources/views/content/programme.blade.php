@extends('layouts.app')

@section('content')
    <div x-data="{activeTab: 0}"
         id="programme"
         class="grid"
    >
        @foreach($events as $event)
            <div @click="activeTab = {{$loop->index}}"
                 :class="{'activelink' : activeTab === {{$loop->index}}}"
                 class="right card @if($loop->first) border-top @endif"
                 data-id="{{$loop->index}}"
                 style="display: block">
                @include('partials.card', ['title' => $event->title, 'date' => $event->date, 'date_to' => $event->date_to, 'category'  => $event->additional_category])
            </div>
            <section x-show="activeTab === {{$loop->index}}"
                     x-data="showbuttons"
                     class="section desktopBorder section{{$loop->index}} sectioncontent"
                     style="display: {{$loop->index === 0 ? 'block' : 'none'}}">
                @include('partials.carousel', ['images' => $event->images])
                @include('partials.section', ['title' => $event->title,'description' => $event->description, 'eventCount' => count($events)])
            </section>
            <div x-show="activeTab === {{$loop->index}}"
                 class="left card desktopBorder section{{$loop->index}} sectioncontent"
                 style="display: {{$loop->index === 0 ? 'block' : 'none'}}">
                @include('partials.infocard', ['description' => $event->location, 'doors' => $event->doors, 'link' => $event->tickets])
            </div>
            @if($event->additional_description)
                <div x-show="activeTab === {{$loop->index}}"
                     class="left card additional desktopBorder section{{$loop->index}} sectioncontent"
                     style="display: {{$loop->index === 0 ? 'block' : 'none'}}">
                    @include('partials.additional', ['category' => $event->additional_category, 'description' => $event->additional_description, 'link' => $event->additional_link])
                </div>
            @endif
        @endforeach
    </div>

@endsection
