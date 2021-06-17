<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Le conditionnel en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        
    <?php

        // $test=false;

        $test = null;

        

        // Je ne rentre dans la condition que si $test est vrai

        /* $test est faux si et seulement
            $test=false;
            $test=0;
            $test="";
            $test=null;
            */
        if ($test){
            echo "Je rentre bien dans la condition<br>";
        }

        $message_erreur = "Il y a eu une erreur";
        $message_erreur = "";

        // On nomme une variable qui contiendra un message d'erreur s'il y a une erreur.
        // Si il y a une erreur, on affiche l'erreur, puis on coupe l'execution du programme
        if ($message_erreur){
            echo $message_erreur;
            exit(); // Coupe l'exection du script
        }


        // Le point d'exclamation permet d'inverser le boolean.
            // Si $test est vrai, !$test est faux
            // Si $test est faux, !$test est vrai
        if (!$message_erreur){
            echo "congratulation, il n'y a pas eu d'erreur !<br>";
        }


        // Forme complete du if

        $variable = -5;

        if ($variable == 1){
            echo "variable est egale a 1<br>";
        }elseif ($variable > 1){
            echo "variable est superieur a 1<br>";
        }else{
            echo "variable est inferieur a 1<br>";
        }

        // Forme ternaire

        // $resultat = ($test) ? ($resultatSiVrai) : ($resultatSiFaux);


        $monnaie = 3;
        echo $fruit = ($monnaie > 5) ? "mangue" : "orange";

        $test = 3;

        switch($test){
            case 0:
                echo "La variable $test est egale a 0<br>";
                break;
            case 1:
                echo "La variable $test est egale a 1<br>";
                break;
            case 2:
                echo "La variable $test est egale a 2<br>";
                break;
            case 3:
                echo "La variable $test est egale a 3<br>";
                break;
            case 4:
                echo "La variable $test est egale a 4<br>";
                break;
            default:
                echo "Ce nombre n'est pas compris entre 0 et 4<br>";
        }

            $beau = true;
            $riche = false;

        if ($beau AND $riche){ // Le "ET" - On peut utiliser AND ou &&
            echo "Je pecho<br>";
        }

        if ($beau OR $riche){ // le "OU" - On peut utiliser OR ou ||
            echo "Je pecho<br>";
        }

        if ($beau XOR $riche){ // Le "OU" exclusif
            echo "je pecho<br>";
        };
    ?>


    </body>
</html>