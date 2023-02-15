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
                :wire:key="$residency->id . date"
                :model="$residency"
                :field="'images'"
            ></livewire:images>
            @include('partials.editsection', ['event'=>$residency, 'eventCount' => 4])
        </section>
    </div>
@endsection
