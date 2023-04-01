@extends('layout.general')

@section('content')
    <div class="article">
        <img src="{{ asset('kiki.jpg') }}" alt="kiki" class="kiki" />
        <div class="text">
            <h2>Kiki de Montparnasse</h2><br />
            <p>Dans le Montparnasse de bohème et de génie des années vingt, Kiki réussit à s'extraire de la misère pour
                devenir
                l'une des figures les plus charismatiques de l'avant-garde de l'entre-deux-guerres. </p><br />

            <p>Kiki aime la vie, aime les arts, les hommes, l’alcool et la fête… En 1929, elle passe 10 jours en prison à
                Nice
                après
                s’en être violemment pris à un patron de bar qui l’avait recalée...</p><br />
            <p>Kiki était également une amoureuse des animaux et avait plusieurs chats. Elle a un jour sauvé un chat des
                griffes
                d'un chien en se battant avec l'animal.
            </p><br />
            <p>Kiki était également connue pour son appétit et sa gourmandise. Elle aurait mangé une fois un kilo de fraises
                en
                une
                seule soirée, et aurait été surprise en train de voler des croissants dans une boulangerie à Paris.</p>
            <br />
            <p>Kiki était très superstitieuse et croyait aux fantômes. Elle aurait même emmené des amis visiter des
                cimetières
                la
                nuit pour essayer de communiquer avec les morts.</p><br /><br />
            <h2> En explorant le site, nous vous encourageons à choisir un personnage pour vous guider dans votre voyage.
                Suivrez-vous les traces de Kiki ?</h2>
        </div>
        <div class="media">
            <img src="{{ asset('gramo.png') }}" alt="gramo" id="play-audio" />
            <audio id="audio" src="{{ asset('Kiki.mp3') }}" controls></audio>
        </div>

    </div>
@endsection
