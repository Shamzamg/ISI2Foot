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
    <div class="container equipe-container">
        <div class="row">
        @foreach($equipes as $equipe)
            <div class="card equipe-card">
                <img src="{{ asset('images/equipes/'.$equipe->logo_equipe) }}" class="equipe-img"/>
                <h5 class="card-title text-center">{{ $equipe->nom_equipe }}</h5>
                <a href="{{ route('equipes.show', $equipe->nom_equipe) }}" class="equipe-btn">Voir</a>
            </div>
        @endforeach
        </div>
    </div>
@endsection
