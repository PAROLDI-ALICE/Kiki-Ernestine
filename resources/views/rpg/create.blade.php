@extends('layout.general')

@section('content')

<!-- FORM REGISTER USER -->
<div class="registerForm">
    <form>
        <label for="firstname">Votre prénom</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Votre nom</label>
        <input type="text" name="lastname" id="lastname">
        <label for="pseudo">Votre pseudo</label>
        <input type="text" name="pseudo" id="paseudo">
        <label for="email">Votre email</label>
        <input type="email" name="email" id="email">
        <label for="password">Votre mot de passe</label>
        <input type="password" name="password" id="password">
        <input type="submit" class="submit" value="Valider" />
    </form>
</div>

@endsection