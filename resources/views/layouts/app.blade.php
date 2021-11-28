<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>@yield('title', 'Materialize Kit By Dev Ace')</title>

    @include('layouts.includes.styles')



</head>
<body style="background: rgb(241, 244, 249)">
    <div id="top">
        <main class="">
            @yield('content')
        </main>
    </div>

    @routes
    @include('layouts.includes.scripts')
</body>
</html>
