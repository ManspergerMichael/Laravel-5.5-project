<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @yield('section content', or 'default' ) --}}
    <title>@yield('title', 'Big Booty Bitches')</title> 
</head>
<body>
    <ul>
        <li><a href="/">The bitches crib</a></li>
        <li><a href="/contact">Holla at some bitches</a></li>
        <li><a href="/about">All about the bitches</a></li>
    </ul>
   @yield('content')
</body>
</html>
