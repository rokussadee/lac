@extends('layouts.app')

@section('content')
    <div x-data="{activeTab: 0}"
         class="grid border-top">
        @foreach($events as $event)
            <div @click="activeTab = {{$loop->index}}"
                 :class="{'activelink' : activeTab === {{$loop->index}}}"
                 class="right card"
                 data-id="{{$loop->index}}"
                 style="display: block">
                @include('partials.card', ['title' => $event->title, 'date' => $event->date])
            </div>
            <section x-show="activeTab === {{$loop->index}}"
                     x-data="showbuttons"
                     class="section section{{$loop->index}} sectioncontent"
                     style="display: {{$loop->index === 0 ? 'block' : 'none'}}">
                @include('partials.carousel', ['images' => $event->images])
                @include('partials.section', ['title' => $event->title,'description' => $event->description])
            </section>
            <div x-show="activeTab === {{$loop->index}}"
                 class="left card section{{$loop->index}} sectioncontent"
                 style="display: {{$loop->index === 0 ? 'block' : 'none'}}">
                @include('partials.infocard', ['location' => $event->location, 'doors' => $event->doors, 'link'=>''])
            </div>
            @if($event->additional_category)
                <div x-show="activeTab === {{$loop->index}}"
                     class="left card additional section{{$loop->index}} sectioncontent"
                     style="display: {{$loop->index === 0 ? 'block' : 'none'}}">
                    @include('partials.additional', ['category' => $event->additional_category, 'description' => $event->additional_description, 'link' => $event->additional_link])
                </div>
            @endif
        @endforeach
    </div>
@endsection
