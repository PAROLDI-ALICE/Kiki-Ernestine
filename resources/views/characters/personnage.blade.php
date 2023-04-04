@extends('layout.general')

@section('content')
<!-- FORM REGISTER CHARACTER -->
<div class="registerForm">

    <form action="{{ route('character.store') }}" method="POST">
        @csrf
        <label for="nom_char">Choississez un pseudo pour votre personnage</label>
        <input type="text" name="nom_char" id="name">
        <label for="description">Description du personnage</label>
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
    <!--Générer les attributs-->
          <p>Magie : {{  $magie =   rand(0, 14) }}</p>
          <p>Force : {{ $force  =   rand(0, 14)}}</p>
            <p>Agilité : {{ $agilite =   rand(0, 14) }}</p>
            <p>Intelligence : {{ $intelligence  =   rand(0, 14)}}</p>
            <p>Points de Vie : {{ $vie  =   rand(20,50)}}</p>
            <input type="submit" class="submit" value="Générer" />
    </form>
</div>
@endsection