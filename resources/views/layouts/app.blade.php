<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="films.css">
    <title>@yield('titre')</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <span class="navitem">Accueil</span>
            <span class="navitem">Autre menu</span>
            <span class="navitem">Autre menu</span>
        </nav>
    </header>

    @yield('contenu')

    <footer>
    <div id="foot"></div>
    </footer>
</body>

<script src="https://kit.fontawesome.com/d01f0f8981.js" crossorigin="anonymous"></script>
</html>