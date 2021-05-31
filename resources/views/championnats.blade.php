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
    <div class="container championnat-container">
        <div class="row">
        @foreach($championnats as $championnat)
            <div class="card championnat-card">
                <img src="{{ asset('images/championnats/'.$championnat->logo) }}" class="championnat-img"/>
                <h5 class="card-title text-center">{{ $championnat->nom }}</h5>
                <a href="{{ route('championnats.show', $championnat->nom) }}" class="championnat-btn">Voir</a>
            </div>
        @endforeach
        </div>
    </div>
@endsection