@extends('layouts.layout')

@section('titrePage', 'Liste des Joueurs')

@section('titreItem')
    <h1>Tous les joueurs: </h1>
@endsection

@section('contenu')

    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Nous avons sélectionné pour vous: </h5>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Equipe</th>
                        <th></th>
                        <th></th>
                    </thead>
                    @foreach($joueurs as $joueur)
                        <tr>
                            <td> {{ $joueur->id }} </td>
                            <td> {{ $joueur->nom }} </td>
                            <td> {{ $joueur->prenom }} </td>
                            <td> {{ $joueur->equipe->nom_equipe }} </td>
                            <td> <a class="btn btn-primary" href="{{ route('joueurs.show', $joueur->id) }}">Voir</a> </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection