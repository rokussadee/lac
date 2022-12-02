@extends('layouts.app')

@section('content')
    <div class="artwork-grid">

        <div class="artwork-side-nav">

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
