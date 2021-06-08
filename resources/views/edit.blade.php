@extends('layouts.layout')

@section('titrePage', 'Modification d'un joueur')

@section('contenu')
@if(session()->has('info'))
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    <div class="card-body">
        <p class="card-text">{{ session('info') }}</p>
    </div>
</div>
@endif
<br>
<div class="container" style="height: 100vh;">
    <div class="row card text-white bg-dark">
        @auth
        <h4 class="card-header">Modifier un joueur</h4>
        <div class="card-body">
            <form action="{{ route('joueurs.update',$joueur->id)}}" method="POST">
                @csrf
                @method('put')
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('equipe_id') is-invalid @enderror" name="equipe_id" id="equipe_id" value="{{ old('equipe_id', $joueur->equipe_id) }}" placeholder="Numero de l'équipe">
                    @error('equipe_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" value="{{ old('nom', $joueur->nom) }}" placeholder="Nom du joueur">
                    @error('nom')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="prenom" value="{{ old('prenom', $joueur->prenom) }}" placeholder="Prenom du joueur">
                    @error('prenom')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" id="age" value="{{ old('age', $joueur->age) }}" placeholder="Age du joueur">
                    @error('age')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" id="numero" value="{{ old('numero', $joueur->numero) }}" placeholder="Numéro du joueur">
                    @error('numero')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="photo" id="photo" value="{{ old('photo', $joueur->photo) }}" placeholder="Photo">
                </div>
                <br>
                <button type="submit" class="btn btn-secondary">Modifier !</button>
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