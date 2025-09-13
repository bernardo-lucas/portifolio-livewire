<!DOCTYPE html>
<html lang="pt-BR">
<head>
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
        <nav>
            <a href="/">Home</a>
            <a href="/quem-sou-eu">Quem sou eu</a>
            <a href="/sobre">Sobre</a>
            <a href="/projetos">Projetos</a>
            <a href="/contato">Contato</a>
        </nav>
        {{ $slot }}
    </div>

    @livewireScripts
</body>
</html>

