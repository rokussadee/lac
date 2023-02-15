<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @isset($title)
        <title>
            {{$title}} – les ateliers claus
        </title>
@endisset
<!-- Fonts -->

    <!-- Styles -->
    <link rel="icon" type="image/png" href={{asset('assets/LesAteliersClaus-icon_1.png')}} sizes="16x16">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>

    @livewireStyles
    <script src="{{asset('js/app.js')}}" defer></script>
</head>
<body>

@include('layouts.navigation')

<main>
    @yield('content')
</main>

@livewireScripts
</body>
</html>
