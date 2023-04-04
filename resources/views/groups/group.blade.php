@extends('layout.general')

@section('content')
    <!-- FORM Edit CHARACTER -->
    <div class="registerGroup">
        <form action="{{ route('group.store') }}" method="POST">
            {{-- <form action="{{ route('rpg.store') }}" method="POST"> --}}
            @csrf
            <label for="nom_groupe">Nom du groupe</label>
            <br />
            <input type="text" name="nom_groupe" id="nom_groupe">
            <br /><br />
            <label for="description_groupe">Choissisez votre histoire</label>
            <br />
            <select name="description_groupe" id="description_groupe">
                <option value="">--Choississez votre histoire--</option>
                <option value="Kiki la muse">
                    Kiki la muse

                </option>

                <option value="Kiki la modèle">
                    Kiki la modèle
                </option>

                <option value="Kiki la rebelle">Kiki la rebelle
                </option>

                <option value="Kiki la chanteuse">Kiki la chanteuse
                </option>

                <option value="Kiki l'artiste">Kiki l'artiste

                </option>
                <option value="Kiki la tragique">Kiki la tragique
                </option>
            </select>
            <br /><br />
            <label for="nbre_places">Nombre de places</label>
            <br /><br />
            <input type="number" name="nbre_places" id="nbre_places" min=1 value=1>


            <input type="submit" class="submit" value="Créer" />

        </form>

        <div>
            <h4>Les histoires de Kiki</h4><br /><br />
            <h5>Kiki la muse</h5>
            <p>Dans les années 1920, Kiki était l'un des visages les plus célèbres du Paris bohème, et de nombreux
                artistes et écrivains de l'époque, tels que Man Ray et Ernest Hemingway, étaient captivés par
                elle.<br />
                Une histoire raconte comment elle a un jour posé pour un artiste qui ne pouvait pas payer sa
                redevance. <br />Au lieu de cela, il lui a donné un dessin d'elle-même, qu'elle a immédiatement déchiré
                et
                jeté à son visage.</p>
            <br />
            <h5>Kiki la modèle</h5>
            <p>En 1924, Kiki a posé pour une série de photographies de Man Ray qui sont devenues quelques-unes des
                images les plus emblématiques du mouvement surréaliste.<br /> L'une des photos, intitulée "Le Violon
                d'Ingres", montre Kiki avec des ouïes de violon peintes dans le dos, imitant un violon. <br />L'image
                est
                à la fois ludique et érotique, et est devenue l'un des exemples les plus célèbres de la photographie
                surréaliste.</p> <br />
            <h5>Kiki la rebelle</h5>
            <p>Kiki était connue pour son comportement outrancier et son attitude irrévérencieuse, et était souvent
                vue en train de se promener dans Paris avec ses amis, notamment l'artiste Marcel Duchamp. <br />Une
                célèbre histoire raconte comment elle a un jour fait irruption dans une soirée au Musée du Louvre,
                déguisée en Mona Lisa, avec une perruque noire et une fausse moustache. <br />Le coup d'éclat a fait
                sensation et a fait la une des journaux parisiens.</p> <br />
            <h5>Kiki la chanteuse</h5>
            <p>Kiki était une chanteuse de cabaret, et s'est produite dans certains des clubs les plus célèbres de
                Paris. <br />Elle était connue pour son humour grivois et son charme terrien, et ses chansons traitaient
                souvent des thèmes du sexe et de l'amour.<br /> L'une de ses chansons les plus célèbres, "Mon Homme", a
                été plus tard rendue célèbre par la chanteuse Edith Piaf.</p> <br />
            <h5>Kiki l'artiste</h5>
            <p>Malgré sa réputation de femme sauvage et non conventionnelle, Kiki était aussi une artiste
                talentueuse. <br />Elle a peint et dessiné tout au long de sa vie, et beaucoup de ses œuvres sont
                aujourd'hui conservées dans des collections privées. <br />L'une de ses peintures les plus célèbres est
                un
                autoportrait dans lequel elle se représente en sphinx, en référence à sa personnalité énigmatique et
                mystérieuse.</p> <br />
            <h5>Kiki la tragique</h5>
            <p>Vers la fin de sa vie, la santé de Kiki a commencé à décliner, et elle a lutté contre l'alcoolisme et
                la pauvreté. <br />Elle est décédée en 1953 à l'âge de 51 ans, mais son héritage en tant que symbole du
                Paris bohème a perduré. <br />Son histoire a inspiré de nombreux artistes et écrivains, et elle reste
                une
                figure aimée de l'histoire de la culture parisienne.</p>
        </div>
    @endsection
