@extends('layout.general')

@section('content')
<div class="registerForm">
    <!-- ERROR UPDATE -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif
    <!-- FORM REGISTER USER -->
    <div class=intro>
        <h2>Bienvenue sur notre site dédié à la vie de Kiki de Montparnasse, l'icône française de l'art et du modèle
            !</h2><br />
        <p>Nous sommes ravis que vous ayez décidé de rejoindre notre communauté pour explorer l'héritage de
            cette femme extraordinaire. <br />Avant de commencer, nous vous invitons à créer un compte utilisateur
            pour avoir accès à toutes les fonctionnalités interactives. <br />Nous sommes impatients de vous voir
            plonger dans le monde de Kiki de
            Montparnasse et de découvrir tout ce que notre site a à offrir. <br /><br />Merci de nous rejoindre et de
            faire partie
            de cette aventure passionnante !</p><br /><br />
    </div>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div>
            <label for="prenom">Votre prénom</label>
            <input type="text" name="prenom" id="firstname">
            <label for="nom">Votre nom</label>
            <input type="text" name="nom" id="lastname"><br />
        </div><br />
        <label for="pseudo">Votre pseudo</label>
        <input type="text" name="pseudo" id="pseudo"><br />

        <label for="email">Votre email</label>
        <input type="email" name="email" id="email"><br />
        <label for="mdp">Votre mot de passe</label>
        <input type="mdp" name="mdp" id="password"><br />
        <input type="submit" class="submit" value="Valider" />
    </form>

</div>
@endsection