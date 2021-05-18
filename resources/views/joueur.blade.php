@extends('layouts.layout')

@section('titrePage')
    Information sur le Joueur
@endsection

@section('contenu')
    <div class="d-flex justify-content-center">
        <img src="{{asset($path)}}" style="max-width: 14%; margin-right: 10px; margin-bottom: 20%;">
        <div>
            <h5 class="card-title">Nom : {{ $joueur->nom }}</h5>
            <p class="card-text">Prénom : {{ $joueur->prenom }}</p>
            <p class="card-text">Age : {{ $joueur->age }}</p>
            <p class="card-text">Numéro : {{ $joueur->numero }}</p>
            <p class="card-text">Equipe : {{ $equipe->nom_equipe }}</p>
        </div>
    </div>
@endsection