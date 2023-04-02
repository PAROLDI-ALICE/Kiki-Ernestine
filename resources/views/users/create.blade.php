@extends('layout.general')

@section('content')
    <!-- FORM REGISTER USER -->
    <div class="registerForm">

        <h2>Bienvenue sur notre site dédié à la vie de Kiki de Montparnasse, l'icône française de l'art et du modèle
            !</h2><br />
        <p>Nous sommes ravis que vous ayez décidé de rejoindre notre communauté pour explorer l'héritage de
            cette femme extraordinaire. <br /><br />Avant de commencer, nous vous invitons à créer un compte utilisateur
            pour avoir accès à toutes les fonctionnalités interactives que nous offrons. Cela vous permettra de
            sauvegarder vos préférences de recherche, de laisser des commentaires sur les articles et de participer à
            notre communauté en ligne. <br /><br />Nous sommes impatients de vous voir plonger dans le monde de Kiki de
            Montparnasse et de découvrir tout ce que notre site a à offrir. Merci de nous rejoindre et de faire partie
            de cette aventure passionnante !</p><br /><br />
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div>
                <label for="firstname">Votre prénom</label>
                <input type="text" name="firstname" id="firstname">
                <label for="lastname">Votre nom</label>
                <input type="text" name="lastname" id="lastname"><br />
            </div><br />
            <label for="pseudo">Votre pseudo</label>
            <input type="text" name="pseudo" id="pseudo"><br />

            <label for="email">Votre email</label>
            <input type="email" name="email" id="email"><br />
            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password"><br />
            <input type="submit" class="submit" value="Valider" />
        </form>

    </div>
@endsection
