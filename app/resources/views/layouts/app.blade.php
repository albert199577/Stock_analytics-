<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('chart.js/chart.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    
    <title>Stock - @yield('title')</title>
</head>
<body>

    @yield('content')
</body>
</html>