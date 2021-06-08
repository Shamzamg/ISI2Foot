@extends('layouts.layout')
@section('contenu')

<div class="container">
    <div class="row card text-white bg-dark">
        @auth
        <h4 class="card-header">Ajouter un joueur</h4>
        <div class="card-body">
            <form action="{{ route('joueurs.store')}}" method="POST">
                @csrf
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('equipe_id') is-invalid @enderror"
                        name="equipe_id" id="equipe_id" placeholder="Id de l'équipe">
                    @error('equipe_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('nom') is-invalid @enderror"
                        name="nom" id="nom" placeholder="Nom du joueur">
                    @error('nom')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="prenom"
                        placeholder="Prenom du joueur">
                    @error('prenom')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" id="age"
                        placeholder="Age du joueur">
                    @error('age')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" id="numero"
                        placeholder="Numero du joueur">
                    @error('numero')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="photo" id="photo" placeholder="Photo">
                </div>
                <br>
                <button type="submit" class="btn btn-secondary">Ajouter</button>
            </form>
        </div>
        @else
        <h4 class="card-header">Accès interdit</h4>
        <div class="card-body">
            Vous n'avez pas les autorisations requises pour accéder à cette page.
        </div>
        @endauth
    </div>
</div>
@endsection