@extends('layout.general')

@section('content')
<!-- FORM REGISTER CHARACTER -->
<div class="registerForm">

    <form action="{{ route('character.store') }}" method="POST">
        @csrf
        <label for="nom_char">Nom du personnage</label>
        <input type="text" name="nom_char" id="name">
        <label for="description">Votre pseudo</label>
        <select name="description" id="description">
            <option value="">--Choississez votre artiste--</option>
            <option value="Andre Breton">André Breton - poète surrealiste par excellence</option>
            <option value="Paul Eluard">Paul Eluard - amoureux des mots et des femmes</option>
            <option value="Louis Aragon">Louis Aragon - génie de l'éloquence</option>
            <option value="Amadeo Modigliani">Amadeo Modigliani - l'artiste au trait de pinceau assassin</option>
            <option value="Max Ernst">Max Ernst - l'homme au regard multidimensionnel</option>
            <option value="Vaslav Nijinski">Vaslav Nijinski - le russe qui file à l'anglaise</option>
        </select>

        <input type="submit" class="submit" value="Valider" />
    </form>

    <form action="{{ route('attribute.store') }}" method="POST">
        <label for="specialty">Votre spécialité</label>
        <select name="specialty" id="specialite">
            <option value="">--Choississez votre spécialité--</option>
            <option value="Guerrier">Guerrier</option>
            <option value="Mage">Mage</option>
            <option value="Druide">Druide</option>
            <option value="Assassin">Assassin</option>
            <option value="Berserker">Berserker</option>
            <option value="Archer">Archer</option>
        </select>
        <input type="submit" class="submit" value="Valider" />
    </form>
    <!--Générer les attributs-->
    <form action="{{ route('attribute.low') }}" method="POST">
        <ol>
            <li>Magie : {{ $randomLow }}</li>
            <li>Force : {{ $randomLow }}</li>
            <li>Agilité : {{ $randomLow }}</li>
            <li>Intelligence : {{ $randomLow }}</li>
            <input type="submit" class="submit" value="Générer" />
    </form>
    <form action="{{ route('attribute.high') }}" method="POST">
        <li>Points de Vie : {{ $randomHigh }}</li>
    </form>
    </ol>


</div>
@endsection