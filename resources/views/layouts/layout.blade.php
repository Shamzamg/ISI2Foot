<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css">
        @yield('stylesheet')
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>

        <title>
            @yield('titrePage')
        </title>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="{{ asset('isi2logo.png') }}" alt="isi2logo" width="20px;" style="margin-bottom: 4px; margin-right: 4px;"/> ISI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/equipes">Equipes</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/rencontres">Rencontres</a>
                    </li>
                    @auth 
                    <li class="nav-item">
                    <a class="nav-link" href="/ajout">Ajouter</a>
                    </li>
                    @endauth
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Voir ...
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/championnats">Les championnats</a></li>
                        <li><a class="dropdown-item" href="/joueurs">Les joueurs</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">

                            @auth
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Bienvenue, {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navabarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('D??connexion') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>

                        @else
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                        @endauth
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </head>
    <body>
        @yield('contenu')
        <footer class="d-flex justify-content-between footer">
            <img src="{{ asset('images/logos/france-flag.png') }}" alt="france-flag" style="width: 30px; height: 30px; margin-left: 5px;"/>
            <p style="all:unset;"><b>ISI2Foot - Copyright 3A Info - 2021</b></p>
            <p style="all:unset; margin-right: 5px;">Made in Lyon</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    </body>
</html>