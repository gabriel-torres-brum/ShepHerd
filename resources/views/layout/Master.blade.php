<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShepHerd - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @auth
        <main class="min-h-screen md:h-screen">
            @include('layout.includes.Nav')
            <section class="md:grid md:place-items-center min-h-full bg-base-100">
                <div class="w-full max-w-4xl min-h-screen py-16 px-8 bg-base-200">
                    <div class="flex flex-col items-center justify-between py-8">
                        <h1 class="text-2xl font-bold text-center text-base-content">@yield('title')</h1>
                     </div>
                    @yield('content')
                </div>
            </section>
        </main>
    @endauth
    @guest
        @yield('content')
    @endguest
    <script type="module" src="{{ asset('js/app.js') }}"></script>

    @include('layout._partials.Modal')
</body>

</html>
