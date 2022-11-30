@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'activelink nowiggle'
                : '';
@endphp

<a
    {{ $attributes->merge(['class' => $classes]) }}>
    <div>
        <h1>{{$slot}}</h1>
    </div>
</a>
