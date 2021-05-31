@extends('layouts.layout')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/championnat.css') }}" type="text/css">
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
    <div class="container championnat-view-container">
        <div class="row championnat-view-row">
            <img src="{{ asset('images/championnats/'.$championnat->logo ) }}" class="championnat-view-mainImg"/> 
            <h5 class="card-title">{{ $championnat->nom }}</h5>
        </div>  
        <h5 style="margin-left: 100px; margin-top: 50px;">Tous les joueurs:</h5>
        <div class="row" style="margin-bottom: 40px;">
        @foreach($equipes as $equipe)
            <div class="card championnat-view-card">
                <img src="{{ asset('images/equipes/'.$equipe->logo_equipe) }}" class="championnat-view-img"/>
                <h5 class="card-title text-center">{{ $equipe->nom_equipe  }}</h5>
                <a href="{{ route('equipes.show', $equipe->nom_equipe) }}" class="championnat-btn">Voir</a>
            </div>
        @endforeach
        </div>
    </div>
@endsection