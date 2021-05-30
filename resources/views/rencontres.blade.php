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
    <div class="container equipe-container">
        @foreach($rencontres as $rencontre)
        <div class="row justify-content-around" style="position: relative;">

        
            <div class="card rencontre-card">
                <img src="{{ asset('images/'.$rencontre->equipe1->logo_equipe) }}" class="equipe-img"/>
                <h5 class="card-title text-center">{{ $rencontre->equipe1->nom_equipe }}</h5>
            </div>

            <p style="all: unset; font-weight: bold; font-size: 25px; position: absolute; bottom: 100px;">VS</p>

            <div class="card rencontre-card">
                <img src="{{ asset('images/'.$rencontre->equipe2->logo_equipe) }}" class="equipe-img"/>
                <h5 class="card-title text-center">{{ $rencontre->equipe2->nom_equipe }}</h5>
            </div>
        </div>
        @endforeach
    </div>
@endsection