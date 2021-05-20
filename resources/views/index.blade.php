@extends('layouts.layout')

@section('titrePage', 'Liste des Joueurs')


@section('contenu')
    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif
    <section class="slider">
        @foreach($joueurs as $joueur)
            <div>
                <img src="{{ asset('images/'.$joueur->photo) }}" />
                <div class="desc">
                    <a href="{{ route('joueurs.show', $joueur->id) }}" class="btn">Voir</a>
                </div>
            </div>
        @endforeach
    </section>
@endsection