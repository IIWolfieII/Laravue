<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Sebby Klima">
  <meta name="description" content="Just another random website!">
  <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
  <title>Laravue</title>
</head>

<body class="bg-pattern-fancy">

  {{ $slot }}

  <script src="{{ asset('js/app.min.js') }}"></script>
</body>

</html>