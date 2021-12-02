<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 @include('partials.header')
</head>
<body>
<div id="app">

    <main class="py-3">

        <router-view></router-view>
    </main>
</div>
</body>
</html>
