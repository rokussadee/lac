@extends('layouts.app')

@section('content')
    <div class="grid">

        <div class="admin-side-nav">

            @include('partials.adminsidenav')
        </div>
        <section
            class="section desktopBorder sectioncontent"
            x-data="showbuttons"
        >
            <livewire:images
                :wire:key="$event->id . date"
                :model="$event"
                :field="'images'"
            ></livewire:images>
            @include('partials.editsection', ['event'=>$event, 'eventCount' => 4])
        </section>
    </div>
@endsection
