<?php 
    // Le troisieme argument est la date d'expiration en timestamp
    // Ici, on prends le time stamp du moment ou la page est executée (avec time()), et on ajoute 3 mois
    setcookie("nomCookie","Le contenu du cookie", time()+60*60*24*90);
    setcookie("dateDerniereVisite",date("d/m/y H:i:s"), time()+60*60*24*90);


    // $_COOKIE est une superglobale qui permet de recuperer les cookies de la page sous forme de liste 

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";


    $message = "";
    
    if (isset($_COOKIE["nomCookie"])){
        $message = "<p>Je sais que tu es déjà venu, tu ne peux rien me cacher...</p>";
    }


    // Exercice : 
    // Creez une page langue.php 
    // Creer 3 pages, francais.php -> Ecrivez une phrase en Francais
    //                english.php -> Ecrivez une phrase en Anglais
    //                italian.php  -> Ecrivez une phrase en Italien
    // Dans langue.php, placez 3 liens a, chacun menant vers une des 3 pages 
    //     (exemple :  un bouton "France" qui amene vers la page francais.php) 

    
    // Si une personne vient une deuxieme fois sur la page langue.php, il est automatiquement redirigé vers la page de langue qu'il avais choisi la derniere fois

    // Astuce : En php, pour faire une redirection, on utilise la ligne php suivant 

    // header("location:francais.php"); -> Permet de faire une redirection vers la page francais


    

    
   
    


?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Les cookiers en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
       <?= $message ?>
    </body>
</html>