@extends('layout.general')

@section('content')
    <!-- USER  connected-->
    <div class="registerForm">
        <h1>Etes-vous prêt(e) à (re)jouer ?</h1><br />
        @csrf
        <p>Nous sommes heureux que vous ayez rejoint notre site et nous espérons que vous passerez un moment merveilleux
            ici. <br /><br />En créant votre personnage et en vous joignant à un groupe, vous pourrez découvrir l'univers de
            Kiki de Montparnasse et vous immerger dans le monde effervescent de l'art et de la culture parisienne des années
            1920. <br /><br />Nous sommes impatients de découvrir votre personnage et de partager avec vous notre passion
            pour cette figure emblématique de l'histoire de l'art. </p> <br /><br />
        <h2>Amusez-vous bien !</h2>
        <br />
        <div>
            <h2>Je crée mes personnages et mes groupes</h2>
            <br />
            <a class="submit" href="{{ route('character.index') }}">Personnages</a>
            <a class="submit" href="{{ route('group.index') }}">Groupes</a>
        </div>
        <br />
        <div>
            <h2>Je consulte mon catalogue de personnages</h2>
            <br />
        </div>   
@foreach ($character)
<div>
    {{-- <form action="{{ route('character.store') }}" method="POST"> --}}
    <ul>
        <li>Pseudo du personnage : {{ $character->nom_char}}</li>
        <li>Artiste : {{ $character->description }}</li>
        <li>Description : {{ $character->specialty }}</li>
        <li>Magie : {{ $character->magie }}</li>
        <li>Force : {{ $character->force }}</li>
        <li>Agilite : {{ $character->agilite }}</li>
        <li>Intelligence : {{ $character->intelligence }}</li>
        <li> Point de vie: {{ $character->points_de_vie }}</li>        
</ul>
<input type="submit" class="submit" value="Modifier" />
 <!-- DELETE personnage-->
<form method="post" action="{{ route('character.destroy', $character->id) }}">
    @csrf
    @method('DELETE')
<input type="submit" class="submit" value="Supprimer" />
</form>
</div> 
@endforeach    
        </div>
@endsection
