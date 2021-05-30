@extends('layouts.layout')

@section('titrePage', 'Liste des Equipes')

@section('contenu')
    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif
    <div class="container equipe-view-container">
        <div class="row equipe-view-row">
            <img src="{{ asset('images/'.$equipe->logo_equipe) }}" class="equipe-view-mainImg"/> 
            <h5 class="card-title">{{ $equipe->nom_equipe }}</h5>
        </div>  
        <h5 style="margin-left: 100px; margin-top: 50px;">Tous les joueurs:</h5>
        <div class="row" style="margin-bottom: 40px;">
        @foreach($joueurs as $joueur)
            <div class="card equipe-view-card">
                <img src="{{ asset('images/'.$joueur->photo) }}" class="equipe-view-img"/>
                <h5 class="card-title text-center">{{ $joueur->prenom  }}</h5>
                <h5 class="card-title text-center">{{ $joueur->nom }}</h5>
                <a href="{{ route('joueurs.show', $joueur->id) }}" class="equipe-btn">Voir</a>
            </div>
        @endforeach
        </div>
    </div>
@endsection