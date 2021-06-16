<?php

function debug($list){
    echo "<pre>";
    print_r($list);
    echo "</pre>";
}

$listeCouleur = ["rouge", "vert", "bleu"];

// debug($listeCouleur);



if (!empty($_GET)){
    
    debug($_GET);

    $nombre1 = $_GET["nombre1"];
    $operateur = $_GET["operateur"];
    $nombre2 = $_GET["nombre2"];

    if ($operateur == "addition"){
        $resultat = $nombre1 + $nombre2;
        $phraseDeResultat = "$nombre1 + $nombre2 est égal = $resultat";
    }elseif ($operateur == "soustraction"){
        $resultat = $nombre1 - $nombre2;
        $phraseDeResultat = "$nombre1 - $nombre2 est égal = $resultat";
    }elseif ($operateur == "multiplication"){
        $resultat = $nombre1 * $nombre2;
        $phraseDeResultat = "$nombre1 x $nombre2 est égal = $resultat";
    }elseif ($operateur == "division"){
        $resultat = $nombre1 / $nombre2;
        $phraseDeResultat = "$nombre1 / $nombre2 est égal = $resultat";
    }else{
        echo "Quelque chose ne vas pas, l'opérateur n'est pas attendus";
        exit(); // die()
    }

   
}







?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>TP Calculatrice</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <form action="" method="get">
            <div class="conteneurNombre1">
                <label for="nombre1">Nombre 1</label>
                <input id="nombre1" type="number" name="nombre1">
            </div>
            <div class="conteneurOperateur">
                <label for="operateur">Opérateur</label>
                <select name="operateur" id="operateur">
                    <option value="addition">+</option>
                    <option value="soustraction">-</option>
                    <option value="multiplication">x</option>
                    <option value="division">/</option>
                </select> 
            </div>
            <div class="conteneurNombre2">
                <label for="nombre2">Nombre 2</label>
                <input id="nombre2" type="number" name="nombre2">
            </div>
            <input type="submit" value="Envoyer">
        </form>

        <div class="conteneurResultat">
            <?= (isset($phraseDeResultat)) ? ($phraseDeResultat) : ""; // Forme ternaire : Si $phraseDeResultat existe, j'affiche phrase de resultat, sinon, je renvoie une chaine de caractere vide  ?>
        </div>
    </body>
</html>



<!-- $solde= 1000; //définition solde
function compte($montant){
    //solde = 1000
 
    /*(récupérer le solde)*/global $solde;
    $solde = $solde + $montant; // 1000+ montant(100) = 1100
    print_r("$solde<br>");
}

compte(100);
compte(100);
compte(500);
compte(-1000);

echo $solde; -->