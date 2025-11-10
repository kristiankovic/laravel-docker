<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @stack('css')
    <title>@yield('title', 'Inicio | App')</title>
</head>
<body>
    <header class="flex flex-row justify-around  p-2 bg-black text-white">
        @yield('header')
    </header>

    <main class="flex flex-row justify-center p-2">
        @yield('content')
    </main>
</body>
</html>