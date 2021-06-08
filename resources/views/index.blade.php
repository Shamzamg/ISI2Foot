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
                <img src="{{ asset('images/joueurs/'.$joueur->photo) }}" />
                <div class="desc">
                    @auth
                        <a href="{{ route('joueurs.show', $joueur->id) }}" class="btn btn-primary">Voir</a>
                        <a href="{{ route('joueurs.edit', $joueur->id) }}" class="btn btn-info">Modifier</a>
                    @else
                        <a href="{{ route('joueurs.show', $joueur->id) }}" class="btn">Voir</a>
                    @endauth
                </div>
            </div>
        @endforeach
    </section>
@endsection