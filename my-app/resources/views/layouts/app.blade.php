<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Vite Project</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    @vite(['resources/js/app.js'])
</body>
</html>
