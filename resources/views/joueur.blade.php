@extends('layouts.layout')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/joueur.css') }}" type="text/css">
@endsection

@section('titrePage')
    Information sur le Joueur
@endsection

@section('contenu')
    <div class="d-flex justify-content-center joueur-div"> 
        <img class="joueur-img" src="{{asset($path)}}">
        <div class="joueur-data-container">
            <p class="joueur-nom">{{ $joueur->nom }}</p>
            <p class="joueur-prenom">{{ $joueur->prenom }}</p>
            <div class="container">
                <div class="row">
                    <div class="joueur-numero col-lg-4 col-sm-4">{{ $joueur->numero }}</div>
                    <div class="col-lg-2 col-sm-2"></div>
                    <div class="col-lg-6 col-sm-6">
                        <a href="{{ route('equipes.show', $equipe->nom_equipe) }}" class="joueur-equipe-view">
                            <img class="joueur-equipe-img" src="{{asset('images/equipes/'.$equipe->logo_equipe)}}">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <form action="{{ route('joueurs.destroy', $joueur->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="col-lg-3 col-sm-3">
                            <button class="btn btn-danger btn-delete" type="submit">Supprimer</button>
                        </div>
                        <div class="col-lg-9 col-sm-9"></div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
@endsection