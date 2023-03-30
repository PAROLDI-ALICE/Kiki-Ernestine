<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Rotonde</title>
</head>

<body>
    @guest
        <div class="navBarNotConnex">
            <img src="/images/logo.jpg" alt="logo" class="logo">
            <h1>La Rotonde</h1>
            <a href="home">Salon</a>
            <a href="inscription">Inscription</a>
            <a href="connexion">Connexion</a>
        </div>
    @endguest
    @auth
        <div class="navBarConnex">
            <img src="/images/logo.jpg" alt="logo" class="logo">
            <h1>La Rotonde</h1>
            <a href="home">Salon</a>
            {{-- lister les personnages + creation nouveau --}}
            <a href="personnages">Personnages</a>
            <a href="groupes">Groupes</a>
            <a href="deconnexion">Déconnexion</a>
        </div>
    @endauth


    @yield('content')
</body>
<footer>&copy; Kiki Ernestine 2023</footer>

</html>
