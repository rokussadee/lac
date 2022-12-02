<div>
    <a style="display: flex; flex-wrap: nowrap"><h1 class="titles" style="flex-wrap: wrap">{{$title}}&nbsp;</h1>
        @if(isset($category))
            <h1 class="eventCategory" style="flex-wrap: nowrap">/&nbsp;{{$category}}</h1>
        @endif</a>
    <h2>
        @if(isset($date))
        {!! Helper::dateToString($date) !!}
        @endif
        @if(isset($date_to))
        &DoubleLongRightArrow; {!! Helper::dateToString($date_to) !!}
        @endif
    </h2>
</div>
