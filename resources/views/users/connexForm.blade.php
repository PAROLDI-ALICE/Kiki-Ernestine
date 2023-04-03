@extends('layout.general')

@section('content')
    <!-- FORM CONNECT USER -->
    <div class="registerForm">

        <div class="intro">
            <div>
                <p>Bienvenue sur notre site web dédié à la fascinante vie de Kiki de Montparnasse ! Nous sommes ravis de
                    partager son histoire avec vous. <br />Explorez le monde de Kiki comme si vous y étiez. Vous pourrez
                    découvrir
                    le
                    Paris des années 1920, côtoyer des artistes et des écrivains, et même devenir membre de l'entourage
                    proche
                    de Kiki. </p>
                <br /><br />
                <h4>Connectez-vous dès maintenant pour commencer votre voyage à travers l'une des périodes les plus
                    vibrantes et
                    excitantes de l'histoire.</h4><br /><br />
            </div>
            <form action="{{ route('go.login') }}" method="POST">
                @csrf
                <label for="email">Votre email</label>
                <input type="email" name="email" id="email"><br />
                <label for="mdp">Votre mot de passe</label>
                <input type="password" name="mdp" id="password"><br />
                <input type="submit" class="submit" value="Valider" />
            </form>
        </div>

    </div>
@endsection
