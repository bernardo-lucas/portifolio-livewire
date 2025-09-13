<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Portfólio' }}</title>
    @livewireStyles
    <style>
        nav {
            background: #f3f3f3;
            padding: 1rem;
        }
        nav a {
            margin-right: 1rem;
            text-decoration: none;
            color: #333;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="menu">
    <div class="menu-left">
        <a href="/" class="brand">Lucas Bernardo</a>
    </div>
    <div class="menu-right">
        <a href="/">Home</a>
        <a href="/quem-sou-eu">Quem sou eu</a>
        <a href="/sobre">Sobre</a>
        <a href="/projetos">Projetos</a>
        <a href="/contato">Contato</a>
    </div>
</nav>

        {{ $slot }}
    </div>

    @livewireScripts
</body>
</html>

