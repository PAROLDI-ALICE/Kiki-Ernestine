@extends('layout.general')

@section('content')
    <!-- USER  REGISTERED-->
    <div class="registerForm">
        <h1>Bienvenue {{ $user->pseudo }}!</h1><br />
        @csrf
        <p>Bienvenue sur notre site dédié à l'icône française de l'art et du modèle, Kiki de Montparnasse ! <br />Kiki a été
            une
            muse et une source d'inspiration pour de nombreux artistes pendant la scène culturelle vibrante de Paris dans
            les années 1920. Nous vous invitons à plonger dans son monde et à explorer son héritage à travers notre contenu
            soigneusement sélectionné et nos fonctionnalités interactives. <br /><br />
            Notre site vous offre une occasion unique de découvrir l'univers de Kiki de Montparnasse, une femme qui a
            véritablement marqué son temps. Que vous soyez intéressé par sa vie tumultueuse, ses amitiés avec des artistes
            célèbres ou ses propres réalisations artistiques, vous trouverez de nombreuses informations fascinantes ici.
            <br /><br />Nous espérons que vous apprécierez l'expérience et que vous sortirez de notre site avec une
            compréhension
            plus profonde de l'héritage de Kiki.
        </p><br />
        <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <button type="submit"><a  href="{{ route('login') }}">Je me connecte</a></button>
    </form>
    </div>
@endsection
