<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShepHerd - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="text-base-content overflow-hidden">
    @auth
        @include('app.layout.includes.header')
        @include('app.layout.includes.aside');
    @endauth
    @guest
        @yield('content')
    @endguest
    <script type="module" src="{{ asset('js/app.js') }}"></script>

    <input type="checkbox" id="modal-question" class="modal-toggle">
    <label for="modal-question" class="modal modal-bottom sm:modal-middle cursor-pointer">
        <form method="POST" action="!#" class="modal-box text-center">
            <h3 id="modal-question-title"class="font-bold text-lg">Quer mesmo excluir $nome do sistema?</h3>
            <p class="py-4 ">Essa ação não poderá ser desfeita.</p>
            <div class="flex justify-between modal-action">
                <label for="modal-question" class="btn btn-outline" type="submit">Cancelar</label>
                <button class="btn btn-error" type="submit">Excluir</button>
            </div>
        </form>
    </label>
</body>

</html>
