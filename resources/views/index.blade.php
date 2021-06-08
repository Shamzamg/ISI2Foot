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
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="{{ route('joueurs.show', $joueur->id) }}" class="btn btn-primary btn-sm">Voir</a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ route('joueurs.edit', $joueur->id) }}" class="btn btn-info btn-sm">Modifier</a>
                        </div>
                        <div class="col-lg-4">
                            <form action="{{ route('joueurs.destroy', $joueur->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-warning btn-sm" type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                    @else
                    <a href="{{ route('joueurs.show', $joueur->id) }}" class="btn">Voir</a>
                    @endauth
                </div>
            </div>
        @endforeach
    </section>
@endsection