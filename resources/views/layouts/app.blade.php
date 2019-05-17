<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body {
        background-image: url({{ asset('image/15490.jpg') }});
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        }
    </style>
    @yield('css')
</head>
<body>
        <?php
        $menu_user = DB::table('users')->where('name', 'like', 'ialy')->pluck('menu');
        $pieces = explode(",", $menu_user[0]);
        $menu0=$menu1 = $menu2= $menu3= $menu4= $menu5= $menu6= false;
        foreach($pieces as $produit){
            if($produit=="menu0"){$menu0= true;}
            if($produit=="menu1"){$menu1= true;}
            if($produit=="menu2"){$menu2= true;}
            if($produit=="menu3"){$menu3= true;}
            if($produit=="menu4"){$menu4= true;}
            if($produit=="menu5"){$menu5= true;}
            if($produit=="menu6"){$menu6= true;}
        }
        ?>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Accueil
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <?php if($menu0==true){ ?>
                        <li class="nav-item"><a id="navbarDropdown1" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>ARTICLE</a>
                        <div class="dropdown-menu dropdown-menu menuperso" aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item" href="{{ url('/famille') }}"> LISTING ARTICLE ET CREATION DE BON DE SORTIE</a>
                                    <a class="dropdown-item"> CATALOGUE</a>
                                    </div>
                        </li>
                        <?} php if($menu1==true){ ?>
                        <li class="nav-item"><a id="navbarDropdown2" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>STRUCTURE</a>
                        <div class="dropdown-menu dropdown-menu menuperso" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="{{ url('/famille') }}">DOCUMENTS DES SORTIES (POUR VALIDATION)</a>
                                    <a class="dropdown-item">DOCUMENTS DES ACHAT (DANS LA PERSPECTIVE)</a>
                                    <a class="dropdown-item">IMPRESSION</a>
                                    </div>
                        </li>
                        <?} php if($menu2==true){ ?>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}" class="navbar-brand">EDITION</a></li>
                        <?} php if($menu3==true){ ?>
                        <li class="nav-item"><a id="navbarDropdown3" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>PARAMETRAGE ET CONFIGURATION</a>
                        <div class="dropdown-menu dropdown-menu menuperso" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item">CREATION COMPTE UTILISATEUR</a>
                                    <a class="dropdown-item"> PARAMETRAGE DROIT D’ACCES</a>
                                    <a class="dropdown-item"> Aides</a>
                                    </div>
                        </li>
                        <?} php if($menu4==true){ ?>
                        <li class="nav-item"><a id="navbarDropdown3" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Commande</a>
                        <div class="dropdown-menu dropdown-menu menuperso" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="{{url('/confirmes')}}">Confirmés</a>
                                    <a class="dropdown-item" href="{{url('/refuses')}}">Refusés</a>
                                    </div>
                        </li>
                        <?} php if($menu5==true){ ?>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/codebarre') }}" class="navbar-brand">CODEBARRE</a></li>
                        <?} php if($menu6==true){ ?>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/panier') }}" class="navbar-brand">PANIER</a></li>
                        <?php } ?>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                </div>
            </div>
        </nav>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>