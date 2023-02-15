@extends('layouts.app', ['title' => 'archive'])

@section('content')
    <div class="artwork-grid">

        <div class="artwork-side-nav">

            @include('partials.archivesidenav')
        </div>
        @switch($archive)
            @case('events')
            @include('partials.event-archive')
            @break
            @case('residencies')
            @break
        @endswitch
    </div>
@endsection
