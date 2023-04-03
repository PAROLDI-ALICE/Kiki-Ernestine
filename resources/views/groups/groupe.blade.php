@extends('layout.general')

@section('content')
<!-- FORM Edit CHARACTER -->
<div class="registerGroup">
    <form action="">
        {{-- <form action="{{ route('rpg.store') }}" method="POST"> --}}
        @csrf
        <label for="name">Nom du groupe</label>
        <br />
        <input type="text" name="name" id="name">
        <br /><br />
        <label for="description">Choissisez votre histoire</label>
        <br />
        <select name="description" id="description">
            <option value="">--Choississez votre histoire--</option>
            <option value="histoire1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias veniam velit ex
                asperiores! Facilis doloremque ex, rem harum atque ipsam, iste cupiditate sed nulla magni mollitia
                aliquid quis, fuga a!</option>
            <option value="histoire2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex maiores.
                Hic laborum est corrupti illum consequuntur nemo molestiae qui suscipit, possimus optio, sequi
                voluptates aperiam quos sapiente eveniet asperiores.</option>
            <option value="histoire3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias atque facere
                perferendis accusamus beatae excepturi temporibus quasi iure assumenda laudantium, sint animi
                consequatur veritatis deserunt praesentium tempore? Repellendus, at reprehenderit.</option>
            <option value="histoire4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, voluptates?
                Modi labore incidunt voluptates at deserunt ex earum aut ullam! Reiciendis, animi? Natus sequi officia
                nemo optio ducimus aut. Fuga.</option>
            <option value="histoire5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi adipisci atque saepe
                perferendis mollitia pariatur, iusto consequuntur explicabo voluptatibus, totam quisquam amet commodi
                ducimus est delectus? Odit inventore quo nobis.</option>
            <option value="histoire6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla expedita tempora
                pariatur tempore asperiores magni ipsum dolores! Dolore laudantium est laborum, quo aut sapiente illo in
                porro exercitationem incidunt at!</option>
        </select>
        <br /><br />
        <label for="nombrePlaces">Nombre de places</label>
        <br /><br />
        <input type="number" name="nombrePlaces" id="places" min=1 value=1>


        <input type="submit" class="submit" value="Créer" />

    </form>
</div>
@endsection