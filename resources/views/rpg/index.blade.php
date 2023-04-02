@extends('layout.general')

@section('content')
    <div class="article">
        <div class="imgleft">
            <img src="{{ asset('kiki.jpg') }}" alt="kiki" class="kiki" />
            <img src="{{ asset('kiki2.jpg') }}" alt="kiki" class="kiki2" />
        </div>
        <div class="text">
            <h2>Kiki de Montparnasse</h2><br />

            <p>Dans le Montparnasse de bohème et de génie des années vingt, Kiki réussit à s'extraire de la misère pour
                devenir
                l'une des figures les plus charismatiques de l'avant-garde de l'entre-deux-guerres. </p><br />
            <p>Kiki de Montparnasse est une figure emblématique de la scène artistique et culturelle de Paris dans les
                années 1920. De son vrai nom Alice Prin, elle est née en 1901 dans une famille modeste de
                Châtillon-sur-Seine en Bourgogne. Très tôt, Kiki est attirée par l'univers artistique et quitte sa famille
                pour rejoindre la capitale à l'âge de 14 ans.<br /> <br />Elle y devient rapidement une personnalité
                remarquée,
                posant comme modèle pour de nombreux artistes de renom.<br /><br />
                Parmi les plus marquants figurent André Breton, Paul Eluard et Louis Aragon, fondateurs du mouvement
                surréaliste dont Kiki était une muse et une figure emblématique. <br />Amadeo Modigliani, célèbre peintre et
                sculpteur italien, a également été l'un des amants les plus connus de Kiki. <br />Elle a également entretenu
                une
                relation passionnée avec le peintre allemand Max Ernst, ainsi qu'avec Vaslav Nijinski, légendaire danseur
                russe des Ballets Russes.<br /> <br />Chacun de ces personnages a eu une influence importante sur la vie et
                l'œuvre de Kiki, et leur histoire commune nous permet de mieux comprendre les enjeux culturels et
                artistiques de l'époque.

                <br /><br />Mais
                Kiki n'était pas qu'une simple muse, elle était également une artiste talentueuse, peintre, dessinatrice,
                chanteuse et actrice.
            </p><br /><br />

            <h4>Qu'est-ce que la Rotonde?</h4><br />
            <p>La Rotonde était un célèbre café situé dans le quartier de Montparnasse à Paris, qui était un haut lieu de
                rencontre pour les artistes, écrivains et intellectuels de l'époque. <br /><br />Kiki de Montparnasse était
                une habituée de La Rotonde et y a rencontré de nombreux artistes. <br />Elle y travaillait également comme
                chanteuse et danseuse, contribuant à l'atmosphère bohème et créative du lieu. La Rotonde est donc un lieu
                symbolique de la vie et de l'époque de Kiki de Montparnasse, où elle a passé de nombreuses soirées et où
                elle a tissé des liens avec de nombreux artistes et personnalités influentes.</p><br /><br />
            <h4> En explorant le site, nous vous encourageons à choisir un personnage pour vous guider dans
                votre voyage.
            </h4>
            <h3 class="textright">Suivrez-vous les traces de Kiki ?</h3>
        </div>
        <div class="media">
            <img src="{{ asset('gramo.png') }}" alt="gramo" id="play-audio" />
            <audio id="audio" src="{{ asset('Kiki.mp3') }}" controls></audio>
        </div>

    </div>
@endsection
