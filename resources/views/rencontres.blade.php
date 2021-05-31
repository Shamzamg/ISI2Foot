@extends('layouts.layout')

@section('titrePage', 'Liste des Rencontres')

@section('contenu')
    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif
    <div class="container rencontre-container">
        @foreach($rencontres as $rencontre)
        <div class="row justify-content-center" style="position: relative;">
            <div class="card rencontre-card col-sm-4 col-xs-4">
                <img src="{{ asset('images/'.$rencontre->equipe1->logo_equipe) }}" class="rencontre-img"/>
                <h5 class="card-title text-center">{{ $rencontre->equipe1->nom_equipe }}</h5>
                <a href="{{ route('equipes.show', $rencontre->equipe1->nom_equipe) }}" class="rencontre-btn">Voir</a>
            </div>

            <div class="col-sm-4 col-xs-4 rencontre-score-date">
                <p class="rencontre-date">le {{ $rencontre->date }}</p><br/>

                <p class="rencontre-score">{{ $rencontre->score }}</p>
            </div>

            <div class="card rencontre-card col-sm-4 col-xs-4">
                <img src="{{ asset('images/'.$rencontre->equipe2->logo_equipe) }}" class="rencontre-img"/>
                <h5 class="card-title text-center">{{ $rencontre->equipe2->nom_equipe }}</h5>
                <a href="{{ route('equipes.show', $rencontre->equipe2->nom_equipe) }}" class="rencontre-btn">Voir</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection