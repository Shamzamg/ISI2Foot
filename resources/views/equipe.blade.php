@extends('layouts.layout')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/equipe.css') }}" type="text/css">
@endsection

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
            <img src="{{ asset('images/equipes/'.$equipe->logo_equipe) }}" class="equipe-view-mainImg"/> 
            <h5 class="card-title">{{ $equipe->nom_equipe }}</h5>
        </div>  
        <h5 style="margin-left: 100px; margin-top: 50px;">Tous les joueurs:</h5>
        <div class="row" style="margin-bottom: 40px;">
        @foreach($joueurs as $joueur)
            <div class="card equipe-view-card">
                <img src="{{ asset('images/joueurs/'.$joueur->photo) }}" class="equipe-view-img"/>
                <a href="{{ route('joueurs.show', $joueur->id) }}" class="equipe-view-btn">Voir</a>
            </div>
        @endforeach
        </div>
    </div>
@endsection