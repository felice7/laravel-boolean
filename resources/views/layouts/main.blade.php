<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    @include('layouts.menu')

    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
</body>
</html>