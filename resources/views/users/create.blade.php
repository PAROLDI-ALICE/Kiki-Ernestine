@extends('layout.general')

@section('content')
<!-- FORM REGISTER USER -->
<div class="registerForm">
    <form action="{{ route('store') }}" method="post">
        @csrf
        <label for="firstname">Votre prénom</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Votre nom</label>
        <input type="text" name="lastname" id="lastname">
        <label for="pseudo">Votre pseudo</label>
        <input type="text" name="pseudo" id="pseudo">
        <label for="email">Votre email</label>
        <input type="email" name="email" id="email">
        <label for="password">Votre mot de passe</label>
        <input type="password" name="password" id="password">
        <input type="submit" class="submit" value="Valider" />
    </form>
    @if($errors->any())
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
    @endif
</div>
@endsection