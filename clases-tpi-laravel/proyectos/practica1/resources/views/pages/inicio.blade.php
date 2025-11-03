<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Mi aplicacion')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @stack('css')
</head>
<body>
    <header>
        @yield('header')
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>