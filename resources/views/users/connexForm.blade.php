@extends('layout.general')

@section('content')
    <!-- FORM CONNECT USER -->
    <div class="registerForm">
        <form action="{{ route('index') }}" method="GET">
            @csrf
            <label for="email">Votre email</label>
            <input type="email" name="email" id="email">
            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password">
            <input type="submit" class="submit" value="Valider" />
        </form>
    </div>
@endsection
