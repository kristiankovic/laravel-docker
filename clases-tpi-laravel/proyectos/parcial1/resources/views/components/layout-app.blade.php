<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('title', 'Mi app')</title>
    
    @stack('css')
    <style>
        *{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 1.1rem;
        }

        a:hover{
            background-color: rgb(82, 82, 252);
            color: white;
            border-radius: 9px;
        }
    </style>  
    
</head>
<body>
    <x-navbar>
        
    </x-navbar>

    @yield('content')
</body>
</html>