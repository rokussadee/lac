@extends('layouts.app')

@section('content')
    <div class="artwork-grid">

        <div class="admin-side-nav">

            @include('partials.adminsidenav')
        </div>
        @switch($crud_section)
            @case('users')
            @can('user_crud')
                <div class="admin-event">
                    @foreach($content as $user)
                        <div class="event-item">
                            <section>
                                <h1>{{$user->name}}</h1>
                                <h2>{{$user->email}}</h2>
                                <h3>{{$user->getRoleNames()[0]}}</h3>
                            </section>
                        </div>

                    @endforeach
                </div>
            @endcan
            @break
            @case('events')
            <div class="admin-event">

                <div>
                    <div class="event-item">
                        <section class="mobileBottom">
                            <a href="{{route('admin.events.create-event')}}">
                                <h1>
                                    Create a new event
                                </h1>
                            </a>

                        </section>
                    </div>
                    <div class="event-item">
                        <section class="mobileBottom">
                            <div>
                                <a>
                                    <h1>

                                    </h1>
                                </a>
                            </div>

                        </section>
                    </div>

                    @foreach($content as $event)
                        @include('partials.item-singleview', ['content_type'=>'event', 'item' => $event])
                    @endforeach
                </div>
            </div>
            @break
            @case('residencies')
            <div class="admin-event">

                <div>
                    <div class="event-item">
                        <section class="mobileBottom">
                            <a href="{{route('admin.residencies.create-residency')}}">
                                <h1>
                                    Create a new residency
                                </h1>
                            </a>

                        </section>
                    </div>
                    <div class="event-item">
                        <section class="mobileBottom">
                            <div>
                                <a>
                                    <h1>

                                    </h1>
                                </a>
                            </div>

                        </section>
                    </div>

                    @foreach($content as $residency)
                        @include('partials.item-singleview', ['content_type'=>'residency', 'item' => $residency])
                    @endforeach
                </div>
            </div>
            @break
            @case('artwork')
            @foreach($content as $artwork)
            @endforeach

            @break
        @endswitch
    </div>
@endsection
