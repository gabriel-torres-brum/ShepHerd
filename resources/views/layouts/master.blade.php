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
   @yield('content')
   <script type="module" src="{{ asset('js/app.js') }}"></script>
</body>
</html>