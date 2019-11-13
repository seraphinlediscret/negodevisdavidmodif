<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NegoDevis Simulation</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
  <body>
    <div id="fond_header">
        <nav id="header" class="navbar navbar-expand-lg navbar-dark pt-3 font-weight-bold">
            <h1><img class="ml-2" src="../images/logo_negodevistest.png"  alt="NegoDevis"></h1>
           <div id ="nav" class="d-flex justify-content-end mr-5 navbar-collapse display-5" id="navbarColor02">
              <ul class="navbar-nav">
                 <li class="nav-item active">
                    <a class="nav-link text-white" href="{{ asset('/')}}">ACCUEIL</a>
                 </li>
                 <li class="nav-item active ml-5 mr-5">
                    <a class="nav-link text-white" href="{{ asset('/quote')}}">LES DEVIS</a>
                 </li>
                 <li class="nav-item active">
                    <a class="nav-link text-white" href="{{ asset('/rules')}}">LES REGLES</a>
                 </li>
                 <li class="nav-item active">
                    <a class="nav-link text-white" href="{{ asset('/param')}}">PARAMETRES</a>
                 </li>
              </ul>
            </div>

     <div id="button" class="btn-group btn-group-toggle rounded-pill border border-white col-2 p-1 mr-3" data-toggle="buttons">
        <button type="button" class="btn btn-link btn-sm text-decoration-none text-white font-weight-bold">CONNEXION</button>
           <div class="border-right border-white"></div>
              <button type="button" class="btn btn-link btn-sm text-decoration-none text-white font-weight-bold">INSCRIPTION</button>
     </div>
        </nav>

        @yield('content')

    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
