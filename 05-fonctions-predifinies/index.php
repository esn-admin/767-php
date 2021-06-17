<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Fonctions prédéfinies en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        
        <?= date("l m/Y", 1181030400) . "<br>"; ?> <!-- Date prends en premier argument le format de la date (voir doc), et en deuxieme argument le timestamp de la date voulu -->
        <?= time() . "<br>"; ?> <!-- Le time  stamp, donné par la fonction time(), est le nombre de seconde entre une date donnée et le 1er Janvier 1970 a minuit -->

        <?php
            // strlen permet de connaitre la longueur d'une chaine de caractère
            $chaine = "Je te defi de compter mes caractères !";

            echo strlen($chaine) . "<br>";

            

            // Exercice : Afficher les 10 premiers caracteres de la chaine

            echo substr( $chaine , 10 , 20 );

            // Fonction isset() permet de tester l'existence
                // Elle renvoie true si la vairable existe
                // Elle renvoie false si la variable n'existe pas

            $message_erreur="";
            // $message_erreur="Il y a eu une erreur";

            echo isset($message_erreur);

            if (isset($message_erreur)){
                echo $message_erreur . "<br>";
            }

            // Fonction empty() permet de tester si la variable est vide ou non
                // Renvoie 1 si la chaine de caractere est vide
                // False sinon

            echo empty($message_erreur);

            // Exercice -> Trouver la fonction qui permet de traduire une chaine en minuscule, et tester la fonction
            // Trouver la fonction qui remplace toute les caracteres par un autre caractere
            
            $chaine = "Coucou Je suis une chAine faites pour le tEst !<br>";

            echo strtolower($chaine);

            echo str_replace("t","b",$chaine);

            $chaineModifie = str_replace("t","b",$chaine);

            
        ?>

    </body>
</html>