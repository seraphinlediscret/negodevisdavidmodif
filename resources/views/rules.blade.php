@extends('affichage')
@section('content')

<section class="rules-section col-10 ml-auto mr-auto">
     <h1 class="negociation-rules-title text-center text-white text-decoration-none font-weight-bold mt-3 mb-3 text-decoration-none p-2 rounded">Règles de la négociation</h1>
        <div class="rules-container">
            <div class="rules-listing rounded">
                <div class="rule-association pl-4 pr-4 font-weight-bold">
                    <div id="rule" class="mt-5 col-8 pt-4">
                        <h3 id="rule-title" class="font-weight-bold"></h2>
                            <hr>
                        <p id="rule-declaration"></p>
                    </div>
                    <div id="rule-illustration" class="mt-5">
                        <img id="rule-img" alt="">
                    </div>
                </div>
                <hr>
                <div class="pagination d-block">
                    <ul class="rules-pagination d-flex justify-content-around font-weight-bold">
                        <li class="rules-pagination-elmt" id="backward"> < Précédent</li>
                        <li class="rules-pagination-elmt" id="forward">Suivant ></li>
                    </ul>
                    <ul class="rules-pagination d-flex justify-content-around font-weight-bold">
                        <li class="rules-pagination-elmt" id= "backshort" id="backward"> <<< </li>
                        <li class="rules-pagination-elmt" id= "forshort" id="forward"> >>> </li>
                    </ul>
                </div>
                <div class="btn-group btn-group-toggle d-flex justify-content-center">
                    <a href="{{ asset('/param') }}"><button class="negotiation-button btn text-white font-weight-bold p-3 mb-3 rounded">Négocier</button></a>
                    <a href="{{ asset('/') }}"><button class="home-back-button btn text-white font-weight-bold p-3 rounded">Accueil</button></a>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/rules.js') }}"></script>
    @endsection
