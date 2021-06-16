<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Ecrire dans un fichier en php</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
    <?php

    // fopen permet d'ouvrir un fichier
    // Le premier argument est le nom du fichier a ouvrir
    // Le deuxieme argument est le mode de lecture (voir doc)
        // Dans $file on stock virtuellement le fichier
    
        

    $file = fopen("historique.txt", "a+");

    fwrite($file, "\nJe suis un ajout grace à a+ ");

    $file = fclose($file);

    // exercice : Ecrivez des trucs dans des fichiers


    // Lire un fichier texte

    $fichier = file("historique.txt");

    echo gettype($fichier); // On constate que $fichier est un tableau ! 

    echo "<pre>";
    print_r($fichier);
    echo "</pre>";

    foreach($fichier as $ligne => $contenuLigne){
        $ligne++; // La numeratation des lignes commence par 0. On increment $ligne, pour que le nombre de ligne commence a 1
        echo "<p>Dans ma ligne $ligne, il y a : $contenuLigne</p>";
    }

    





    ?>
    </body>
</html>