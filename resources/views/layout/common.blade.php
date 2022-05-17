<!DOCTYPE html>
<html data-theme="" lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShepHerd - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="module">
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            document.documentElement.setAttribute("data-theme", "dark")
        } else {
        document.documentElement.classList.remove('dark');
        document.documentElement.setAttribute("data-theme", "light")
        }
    </script>
    @livewireStyles
</head>

<body class="antialiased bg-gradient-to-r from-primary/50 to-accent/50">
    <aside class="drawer drawer-mobile overflow-y-hidden">
        <input id="sidebar" type="checkbox" class="drawer-toggle" />
        <div x-data="{ alert: {{ $errors->any() ? 'true' : 'false' }} }" class="drawer-content bg-base-content/40 flex flex-col overflow-y-hidden">
            <livewire:navbar />
            @auth
            <livewire:alert-error />
            <livewire:modal-delete />
            @endauth
            <main class="p-4 h-full overflow-y-auto">
                <div class="max-w-5xl mx-auto h-full lg:px-4">
                    @yield('content')
                </div>
            </main>
        </div>
        @auth
        <livewire:sidebar-menu />
        @endauth
    </aside>
    <script type="module" src="{{ asset('js/app.js') }}"></script>

    @livewireScripts
</body>

</html>