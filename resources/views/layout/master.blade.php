<!DOCTYPE html>
<html class="dark" lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShepHerd - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-slate-500 overflow-hidden">
    @auth
        @include('app.layout.includes.header')
        @include('app.layout.includes.aside');
    @endauth
    @guest
      @yield('content')
    @endguest
    <script type="module" src="{{ asset('js/app.js') }}"></script>

</body>

</html>
