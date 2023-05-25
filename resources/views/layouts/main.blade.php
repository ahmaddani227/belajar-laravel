<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Laravel 9</title>

    {{-- FavIcon --}}
    <link rel="icon" type="image/x-icon" href="/laravel.png">

    {{-- Bootsrap Css --}}
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootsrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    
    @include('partials.navbar')

    @yield('container')

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>