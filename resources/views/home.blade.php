@extends('affichage')
@section('content')

<div id="para1">
        <h2 id="first_h2" class="col-5 text-white font-weight-bold">NegoDevis...<br>L'application qui rend satisfaits <strong class="font-weight-bold">acheteur</strong> et <strong class="font-weight-bold">vendeur</strong></h2>
          <p id="first_p" class="text-white col-6 mt-4 font-weight-bold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est esse facere quae dolores, blanditiis mollitia at sapiente ipsam perferendis suscipit exercitationem minima quibusdam, illo.</p>
          <a id="buttonLancerNego" type="button" class="btn btn-link rounded-pill border border-white text-decoration-none text-white font-weight-bold mt-5" href="{{ asset('/rules')}}">LANCER UNE NÉGOCIATION</a>
    </div>
    <img id="telephone_haut" src="../images/telephone_accueil.png" alt="telephone">

@endsection
