@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'activelink'
                : '';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div>
        <a href=""><h1>{{$slot}}</h1></a>
    </div>
</div>
