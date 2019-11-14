@extends('affichage')
@section('content')

  <!--//////////////WELCOME/////////////////////-->
    <div id="well">
        <h1 class="titbvn text-white">Bienvenue dans les paramètres </h1>
        <p id="bvn" class="text-white">Ici, Vous allez configurer vos paramètres pour entrer en négociation</p>
    </div>

    <div id="paratime">
        <button type="button" class="btn-lg btn btn-block col-8 m-auto text-white font-weight-bold" id="open">Configurer vos paramètres</button>
    </div>

<!--//////////////////NEGODEVIS/////////////////////-->
    <div id="theapplinego"><!--div start-->


<!--Popup qui apparait quand le timer est fini-->
    <div id="stop" class="bg-white text-danger row rounded">
        <h1 class="text-decoration-none  mr-auto ml-auto font-weight-bold mt-5">!! LA NÉGOCIATION EST TERMINÉ !!</h1>
       <h2 class="m-auto">Veuillez "accepter" ou "refuser" la dernière proposition.</h2>
        <div id="btnend" class="d-flex justify-content-around col col-12 mb-5 mt-5">
          <button type="submit" class="btn btn-success accept col-5 p-3 font-weight-bold" id="acceptNEGO">Acceptez l'offre</button>
          <button type="submit" class="btn btn-danger refus col-5 p-3 font-weight-bold" id="theEND">Refuser l'offre</button>
       </div>
    </div>
<!--Fin de la popup-->

<!--////////////////PRICE START///////////////////--->
<!--Block Information lors de la négociation-->
<div class="d-flex justify-content-around">
    <div id="allheaderelements" class="bg-secondary text-center col-5 ml-5 mt-4 rounded border border-secondary">

    <br class="my-1">

    <h3 class="text-white font-weight-bold">Informations :</h3>

    <br class="my-1">

    <div id="divini" class="text-white font-weight-bold p-3 bg-warning rounded">
       <span id="divini-text">Prix initial du vendeur :</span>
       <span id="priceini" class="text-white"></span>
       <span id="price-currency">€</span>
    </div>

<!---////////TIMER/////////-->

<div id="pomodoro-app" class="d-flex justify-content-center">
    <div id="container" class="size_time rounded-circle col-3 mt-5 mb-2 font-weight-bold text-center pt-5 pb-5 pr-1 pl-1 border border-white">
      <div id="timer">
          <div id="time">
              <span id="minutes"></span>
              <span id="colon">:</span>
              <span id="seconds">00</span>
          </div>
      </div>
  </div>
</div>

   <div id="exitandtour" class="mt-4">
    <div id="titre_nbTour" class="font-weight-bold text-white">
        <span id="tourcontent">Nombre de tours :
        <span id="count"></span>
        </span>
    </div>
        <button type="submit" class="btn btn-danger mb-3 mt-5 mb-2" id="exyt">Quitter la negociation</button>
    </div>
   </div>
<!--Fin du block information-->

<!--TABLEAU DE NEGOCIATION-->
<div class="tableau">
<table id="table-hidden" class="table">
<div id="thenego" class="mt-5">
      <div id="valprop" class="justify-content-around">
       <input class="font-weight-bold" type="number" id="validationCustom07" placeholder="Entrez une proposition" required>
        <button class="btn btn-warning font-weight-bold text-white" type="submit" id="validaction">Valider votre proposition</button>
      </div>

<!--Message qui apparait lorsqu'il reste moins de 1min a la négociation-->
    <div id="bcfull" class="mt-3">
        <p id="warning-message" class="font-weight-bold m-auto">
          &#9888; Attention il ne vous reste plus qu'une minutes de négociation &#9888;
        </p>
    </div>
</div>
<!--fin de la balise du message-->

<!--LOADER-->
<div id="afficheLoader" class="background_loader">
    <canvas id="progress" width="1350" height="550" ></canvas>
    <div class="test">
      <section id="loader" class="section_loader">
        <span></span>
         <p class="test_align font-weight-bold">ANALYSE</p>
      </section>
    </div>
</div>

<!--Tableau d'information sur la négociation-->
  <thead>
    <tr class="text-white">
      <th scope="col" class="titletable self"><div class="cell seller-price-cell">
        Prix Vendeur
      </div></th>
      <th scope="col" class="titletable buy"><div class="cell buyer-price-cell">Prix Acheteur</div></th>
      <th scope="col" class="titletable  text-center"><div class="cell counter-cell">0</div></th>
      <th scope="col" class="titletable want"><div class="cell wanted-price-cell">Prix proposé</div></th>
      <th scope="col" class="titletable sold"><div class="cell sold-cell">Rabais %</div></th>
    </tr>
  </thead>
  <tbody id="theTABLE">

  </tbody>
</table>
<!--Fin du tableau-->
<!--Boutton qui s'affiche lorsqu'un tour est effectuer-->
 <div id="yesorno" class="justify-content-around">
    <button type="submit" class="btn btn-success accept font-weight-bold" id="accept">Acceptez l'offre</button>
    <button type="submit" class="btn btn-danger refus font-weight-bold" id="refus">Refuser l'offre</button>
      </div>
    </div>
</div>
<!--fin balise du bouton-->
    </div><!--div end-->

<!--PARAMETTRES DE LA NEGOCIATION-->

<div id="containerparam" class="col-9 pb-5 pt-4 rounded text-center" >
    <button id="ixi" class="btn float-right text-danger font-weight-bold">X</button>
    <h2 id="parameters-title" class="font-weight-bold text-center">Modifier vos Paramètres</h2>

    <hr class="mt-3 mb-4 border-dark col-8">

<form method="post" action="" class="needs-validation" novalidate>
    <div class="farm row">
            <div class="cardinput col-4">
              <label for="validationCustom01" class="titi control-label">Prix du devis :</label>
              <div class="input-group">
              <input type="text" class="form-control field" id="validationCustom01" placeholder="Entrez votre prix initial" value="" required>
              <div class="input-group-append">
                <span class="input-group-text unit">€</span>
              </div>
            </div>
              <div class="valid-feedback">
                Validé !
              </div>
            </div>

      <div class="cardinput col-4">
        <label for="validationCustom02" class="titi">Nombre de trappes</label>
        <input type="number" class="form-control field nbt" id="validationCustom02" placeholder="Entrez votre nombre d'essais" value="" required>
        <div class="valid-feedback">
            Validé !
        </div>
      </div>

      <div class="cardinput col-4">
        <label for="validationCustom03" class="titi">Taux de la trappe</label>
        <div class="input-group mb-3">
        <input type="number" class="form-control field" id="validationCustom03" placeholder="Entrez le taux de trappe" value="" required>
        <div class="input-group-append">
          <span class="input-group-text unitpour">%</span>
        </div>
    </div>
        <div class="valid-feedback">
            Validé !
        </div>
      </div>

      <hr class="my-3 col-10">

      <div class="cardinput col-4">
        <label for="validationCustom04" class="titi">Nombre de tours</label>
        <input type="number" class="form-control field" id="validationCustom04" placeholder="Entrez votre nombre de tours" value="" required>
        <div class="valid-feedback">
            Validé !
        </div>
      </div>

      <div class="cardinput col-4">
        <label for="validationCustom05" class="titi">Prix minimum de vente</label>
        <div class="input-group">
        <input type="text" class="form-control field" id="validationCustom05" placeholder="Entrez votre prix minimum" value="" required>
        <div class="input-group-append">
          <span class="input-group-text unitmin">€</span>
        </div>
    </div>
        <div class="valid-feedback">
            Validé !
        </div>
        </div>

      <div class="cardinput col-4">
        <label for="validationCustom06" class="titi">Temps de négociation (en min)</label>
        <input type="number" class="form-control field" id="validationCustom06" placeholder="Entrez la durée de négociation" value="" required>
        <div class="valid-feedback">
            Validé !
        </div>
      </div>
    </div>
<!--/////////////////////CARD CONFIRM////////////////////////////////-->
<!--ptit popup qui s'affiche pour confirmer la validation des donnés du tableau-->
<div class="card text-white bg-secondary mt-4 col-5" id="confirm"style="display:none;">
    <div class="card-body">
        <h4 class="card-title font-weight-bold">Validation</h4>
        <p class="card-text font-weight-bold">Voulez-vous confirmer ces paramètres ?</p>
        <div class="d-flex justify-content-between">
        <a href="#" class="width_button btn btn-success font-weight-bold" id="conf">Je confirme</a>
        <a href="#" class="width_button btn btn-warning text-white font-weight-bold" id="back">Retour</a>
        </div>
    </div>
</div>
  <button class="btn btn-success text-white font-weight-bold rounded-pill mr-auto ml-auto mt-5 mb-5 p-2" type="submit" id="valid">Valider vos paramètres</button>
    </form>
</div>
<!--///////////////////////////script////////////////////////////////////////////////////-->
  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>

@endsection
