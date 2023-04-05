@extends('layout.general')

@section('content')
<!-- FORM REGISTER CHARACTER -->
<div class="registerForm">
<!--Début du form - 'Valider les datas Character'-->
    <form action="{{ route('character.store') }}" method="POST">
        @csrf
        <label for="nom_char">Choississez un pseudo pour votre personnage</label>
        <input type="text" name="nom_char" id="name">
        <br/>
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
        <br/>
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
        <br/>
        <label for="magie">Magie :</label>
        <input type="text" name="magie" id="magie" value="{{  $magie =   rand(0, 14) }}" readonly="readonly">
        <br/>
        <label for="force">Force :</label>
        <input type="text" name="force" id="force" value="{{  $force =   rand(0, 14) }}" readonly="readonly">
        <br/>
        <label for="agilite">Agilité : </label>
        <input type="text" name="agilite" id="agilite" value="{{  $agilite =   rand(0, 14) }}" readonly="readonly">
        <br/>
        <label for="intelligence">Intelligence :</label>
        <input type="text" name="intelligence" id="intelligence" value="{{ $intelligence =   rand(0, 14) }}" readonly="readonly">
        <br/>
        <label for="points_de_vie">Points de vie : </label>
        <input type="text" name="points_de_vie" id="points_de_vie" value="{{ $vie =   rand(20,50) }}" readonly="readonly">
        <br/>
<!--Submit de 'Valider les datas Character' => 'character.store'-->
    <input type="submit" class="submit" value="Enregistrer" />
<!--Fin du form - 'Valider les datas Character'-->
        </form>
<!--Début du global form - 'Régénérer les attributs' - retour à la page création personnage-->
     <form action="{{ route('character.index') }}" method="GET">
        <br/>
<!--Submit de 'Régénérer les attributs'-->
            <input type="submit" class="submit" value="Regénérer" />
<!--Fin du global form  - 'Régénérer les attributs'-->
    </form>
    <br/>
   
</div>
@endsection