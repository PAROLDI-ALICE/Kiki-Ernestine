<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Rotonde</title>
</head>

<body>
    <div class="navBar">
        <img src="/images/logo.jpg" alt="logo" class="logo">
        <h1>La Rotonde</h1>
        <a href="inscription">Inscription</a>
        <a href="connexion">Connexion</a>
        {{-- lister les personnages + creation nouveau --}}
        <a href="personnages">Personnages</a>
        <a href="groupes">Groupes</a>
    </div>
    @yield('content')
</body>
<footer>&copy; Kiki Ernestine 2023</footer>

</html>
