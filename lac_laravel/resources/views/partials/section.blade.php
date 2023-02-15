<article class="eventContainer" style="min-height: {{($eventCount * 141)-303}}px">
    {{--    <h1>{!! $title !!}</h1>--}}
    {{--    <br>--}}
    <div style="display:flex; justify-content: space-between">
        <p style="font-size: 1.4rem;">
            @isset($event->date)
                {!! Helper::dateToString($event->date) !!}
            @endif
            @isset($event->date_to)
                > {!! Helper::dateToString($event->date_to) !!}
            @endif
        </p>
        @can('content_crud')
            <p><a style="color: red" href="{{route('admin.events.edit-event', ['event'=>$event])}}">edit...</a>
            </p>
        @endcan
    </div>
    <h1 style="font-size: 2.5rem; overflow-wrap: break-word; text-align: left;">
        {{$event->title}}</h1>
    <br>
    {!! nl2br((Helper::parseText( $event->description))) !!}
</article>
<div style="height: .1px">
</div>

