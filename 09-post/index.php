<?php


    $mdp = "";
    if (!empty($_POST)){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    
        $mdp = $_POST["mdp"]; 
    
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


        <title>La méthode Post en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        
        <form action="traitement.php" method="post">
            <label for="mdp">Mot de Passe</label>
            <input type="password" name="mdp" id="mdp">

            <input type="submit">
        </form>

        <?= $mdp ?>

    </body>
</html>