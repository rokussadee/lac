@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'activelink'
                : '';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div>
        <a {{ $attributes->merge(['class' => $classes]) }}><h1>{{$slot}}</h1></a>
    </div>
</div>
