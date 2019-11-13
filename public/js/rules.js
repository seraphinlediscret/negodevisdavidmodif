//****** Variables' declarations ******//

let jsRuleTitleContent = document.getElementById("rule-title");
let jsRuleContent = document.getElementById("rule-declaration");
let jsRuleImg = document.getElementById("rule-img");
let jsLinkBackward = document.getElementById("backward");
let jsLinkForward = document.getElementById("forward");
let jsBackshort = document.getElementById("backshort");
let jsForshort = document.getElementById("forshort");

let countTitles = 0;
let countRules = 0;
let countPictures = 0;

console.log(jsRuleTitleContent);
console.log(jsRuleContent);
console.log(jsRuleImg);

//******Array's linked to the rules of negotiation *//

let titles =
[
    "Présentation",
    "Description de la page de négociation",
    "La colonne jaune",
    "La colonne bleue",
    "Validation de votre proposition",
    "Proposition du nouveau prix",
    "Accord avec le nouveau prix proposé",
    "Message d'envoi de devis",
    "Désaccord avec le nouveau prix proposé",
    "Attention!",
    "Le Compteur de tours",
    "Le Chronomètre",
    "Temps dépassé",
    "Quitter la négociation"
];

let rules =
[
    "Vous êtes sur le point d’entrer en négociation avec « machin » sur le devis n° « 0» concernant « le produit/prestation « bidule-chouette » ». Quelques règles seront à respecter au cours de cette négociation et nous allons vous les présenter.",

    "Au clic du bouton négocier ci dessous vous aller être redirigé vers une page au s’organisera votre négociation. Vous y trouverez un compteur de temps, les tours de négociations possibles, une boîte d'instructions ainsi que l'historique de chaque tour de négociation. ",

    "La colonne jaune correspond aux prix proposés par le vendeur tout au long de la négociation, il se réinitialisera à chaque tour et se trouvera grisé pour les tours précédents",

    "La colonne bleue, quant à elle, correspond aux prix que vous serez amené vous-même à proposer à chaque tour. Comme pour les prix vendeur l'historique de chaque tour sera grisé et vous devrez saisir un nouveau prix dans l'encart aux contours bleus.",

    "Pour confirmer votre prix et le transmettre au vendeur, il vous faudra cliquer sur le bouton \"Validez votre proposition.\"",

    "A chaque validation de votre proposition vous sera renvoyé une réponse correspondant au nouveau prix proposé (en vert) ainsi que la remise appliquée (en orange) au montant du prix du vendeur. Il vous sera alors demandé d’accepter ou de refuser cette proposition.",

    "Si vous êtes en accord avec ce prix cliquez sur le bouton accepter, cela mettra alors fin à la négociation,",

    "Un nouveau devis vous sera transmis via le mail que vous nous avez transmis lors de votre authentification.",

    "Si la proposition se trouve ne pas être à la hauteur de vos espérances vous aurez alors la possibilité de relancer un tour de négociation en cliquant sur le bouton refuser afin de  tenter de faire descendre un peu plus le prix du devis.",

    "En fonction des paramétres de la négociation, définis au prélable par le vendeur, vous serez plus ou moins limité dans votre amplitude à négocier! ",

    "Vous ne pourrez par refuser indéfiniment les prix proposés, à chaque refus un décompte se fera sur le compteur et si vous ne parvenez pas un trouver un accord au dernier tour, cela mettra fin à la négociation.",

    "Prenez garde également au chronomètre, en fonction des paramètres définis par la négociation vous disposerez de plus ou moins de temps pour mener à bien cette dernière. ",

    "Lorsque le chrono passera au rouge c’est que vous serez dans la dernière minute de la négociation. Soyez réactif car si le chrono atteint 00:00 cela mettra fin à celle-ci et vous perdrez vos tours.",

    "Vous avez bien sûr à tout moment la possibilité de quitter la négociation en cliquant sur le bouton \"Quittez la négociation\"."
];

let pictures =
[
    "images/negodevis_couleur.png",
    "images/negociation.png",
    "images/prixvendeur.png",
    "images/prixacheteur.png",
    "images/validation.png",
    "images/proponego.png",
    "images/valipropo.png",
    "images/validationmessage.png",
    "images/refuspropo.png",
    "images/parametres.png",
    "images/compteur.png",
    "images/chrono.png",
    "images/timeout.png",
    "images/quitter.png"
];

console.log(titles);
console.log(rules);


//******Function's declarations******//


function goForward() // arrays' indexes incrementing, it displays the valor associated to the index
{
    if (countTitles < 13)
    {
        jsRuleTitleContent.textContent = titles[countTitles +=1];
        jsRuleContent.textContent = rules[countRules +=1];
        jsRuleImg.setAttribute("src", pictures[countPictures +=1]);
    }
}

function goBackward() // arrays' indexes decrementing, it displays the valor associated to the index
{
    if (countTitles > 0)
    {
        jsRuleTitleContent.textContent = titles[countTitles -=1];
        jsRuleContent.textContent = rules[countRules -=1];
        jsRuleImg.setAttribute("src", pictures[countPictures -=1]);

    }
}

function goShortfor() //Display the first rule
{
    jsRuleTitleContent.textContent = titles[13];
    jsRuleContent.textContent = rules[13];
    jsRuleImg.setAttribute("src", pictures[13]);
}

function goShortback() //Display the last rule
{
    jsRuleTitleContent.textContent = titles[0];
    jsRuleContent.textContent = rules[0];
    jsRuleImg.setAttribute("src", pictures[0]);
}


//******* Auto-display of the first rule when the page is open ******//
goShortback();

//******* Functions' calls for each click on the pagination's links ********//

jsLinkForward.addEventListener("click", goForward);
jsLinkBackward.addEventListener("click", goBackward);

jsForshort.addEventListener("click", goShortfor);
jsBackshort.addEventListener("click", goShortback);
