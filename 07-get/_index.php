<?php

// Si la liste est vide 
//     -> Alors empty($_GET) -> true 
//         -> Alors !empty($_GET) - > False 
//             -> Alors je ne rentre pas dans la boucle, et la liste ne s\'affiche pas

// Si la liste n'est pas vide
//     -> Alors empty($_GET) -> false
//         -> Alors !empty($_GET) - > true
//              -> Alors je rentre dans la condition, et la liste s'affiche

$prenom="";
if (!empty($_GET)){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $prenom = $_GET["prenom"];
    $regime = $_GET["regime"];
    
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


        <title>La méthode get en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <form action="" method="get">
            <div class="conteneurPrenom">
                <label for="prenom">Prenom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="conteneurRegime">
                <p>Quelle est votre régime alimentaire ?</p>
                <div class="conteneurPaleo">
                    <input type="radio" name="regime" id="paleo" value="paleo">
                    <label for="paleo">Regime Paléo</label>
                </div>
                <div class="conteneurVege">
                    <input type="radio" name="regime" id="vege" value="vege">
                    <label for="vege">Regime Végétarien</label>
                </div>
                <div class="conteneurCani">
                    <input type="radio" name="regime" id="cani" value="cani">
                    <label for="cani">Regime Canibale</label>
                </div>
            </div>
            <input type="submit">

            
        </form>
        <p><?= "<p>Bonjour $prenom</p>" ?></p>


        <?php
            if (isset($regime) AND $regime=="cani"){
                ?>
                <p>Vous avez été déclaré Cannibale, une alerte a été envoyé à la police</p>
                
                <?php
            }
        ?>
    </body>
</html>