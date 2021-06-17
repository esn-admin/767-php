<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Les listes en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <?php
            // 2 façons de creer une liste
            $listePrenom1 = array("Myckael", "Antoine", "Samir", "Jean-Christophe", "Evan");
            $listePrenom2 = ["Christiane", "David", "Sarah", "Lucia", "Alexis"];

            // 2 façons de visualiser une liste (pour dev)
            echo "<pre>";
            print_r($listePrenom1);
            echo "</pre>";

            
            var_dump($listePrenom2);
            
            // 2 façons d'ajouter un élément a la fin d'une liste
            $listePrenom2[] = "Cecilia";
            array_push($listePrenom2, "Lucia", "Khalid");

            echo "<pre>";
            print_r($listePrenom2);
            echo "</pre>";

            // Appeler un élément d'une liste

            echo $listePrenom1[1];

            // Tableau associatif

            $color = ["Rouge" => "ff0000", "Vert" => "00ff00", "Bleu" => "0000ff", "Noir" => "000000", "Blanc" => "ffffff"];
            echo "<pre>";
            print_r($color);
            echo "</pre>";

            echo $color["Vert"];

            // Parcourir une liste avec une boucle for
            // A l'aide d'une boucle, parcourez tout les éléments de la liste $listePrenom1

            // count($list) -> Permet de savoir combien d'élément possède la liste
            // sizeof($list) -> Permet de savoir combien d'élément possède la liste

            echo "<p>$listePrenom1[0]</p>";
            echo "<p>$listePrenom1[1]</p>";
            echo "<p>$listePrenom1[2]</p>";
            echo "<p>$listePrenom1[3]</p>";
            echo "<p>$listePrenom1[4]</p>";
            


            for($i=0;$i<count($listePrenom1);$i++){
                echo "<p>$listePrenom1[$i]</p>";

            }

            for($i=0;$i<count($listePrenom2);$i++){
                echo "<p>$listePrenom2[$i]</p>";

            }

            

            // La boucle foreach

            $color = ["Rouge" => "ff0000", "Vert" => "00ff00", "Bleu" => "0000ff", "Noir" => "000000", "Blanc" => "ffffff"];

            foreach($color as $cle => $valeur){
                echo "<p>Le code hexadecimal de $indice est $valeur</p>";
            }


          




        ?>
    </body>
</html>