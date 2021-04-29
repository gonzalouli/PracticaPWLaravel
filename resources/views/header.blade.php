<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Organivel</title>
    @unless (Auth::check())
        You are not signed in.
    @endunless
</head>
<body>
    @yield('contenido');
</body>
</html>

