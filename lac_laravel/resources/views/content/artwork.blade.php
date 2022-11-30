@extends('layouts.app')

@section('content')
    <div class="artwork-grid">

        <div
            style="grid-column: 3; display: grid; grid-auto-rows: 140px;">
            @include('partials.artworksidenav')
        </div>
        @switch($artwork)
            @case('gallery')
            @include('partials.gallery')
            @break
            @case('gazettes')
            @include('partials.gazettes')
            @break
            @case('objects')
            @include('partials.objects')
            @break
            @case('albums')
            @include('partials.albums')
            @break
        @endswitch
    </div>
@endsection
