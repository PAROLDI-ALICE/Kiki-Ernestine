<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Rotonde</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>

<body>
    @guest
    <div class="navBar">
        <div class="left">
            <img src="{{ asset('logo.png') }}" class="logo" />
            <img src="{{ asset('titre.png') }}" class="rotonde" />
        </div>
        <div class="right">
            <button><a class="button-link" href="{{ route('index') }}">Salon</a></button>
            <button><a class="button-link" href="{{ route('create') }}">Inscription</a></button>
            <button><a class="button-link" href="{{ route('login') }}">Connexion</a></button>
        </div>
    </div>
    @endguest
    @auth
    <div class="navBar">
        <div class="left">
            <img src="{{ asset('logo.png') }}" class="logo" />
            <img src="{{ asset('titre.png') }}" class="rotonde" />
        </div>
        <div class="right">
            <button><a class="button-link" href="{{ route('index') }}">Salon</a></button>
            {{-- lister les personnages + creation nouveau --}}
            <button><a class="button-link" href="{{ route('character.create') }}">Personnages</a></button>
            <button><a class="button-link" href="{{ route('group.create') }}">Groupes</a></button>
            <button>Déconnexion</button>
        </div>
    </div>
    @endauth

    <div class="content">
        @yield('content')
    </div>
</body>
<footer>&copy; Kiki Ernestine 2023</footer>

</html>