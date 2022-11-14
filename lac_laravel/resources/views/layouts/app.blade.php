<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Programme</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>

    <script src="{{mix('js/app.js')}}" defer></script>
</head>
<body>

@include('layouts.navigation')

<main>
    @yield('content')
</main>


</body>
</html>
