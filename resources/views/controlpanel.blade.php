<!DOCTYPE html>

@vite('config')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"></link>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Laravel</title>
    <script src="https://kit.fontawesome.com/f4a03c89c0.js" crossorigin="anonymous"></script>
</head>

<div id="app">
    <control-panel></control-panel>
    @yield('content')
</div>


</html>
