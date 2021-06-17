<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Variables en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <!-- En PHP on est capable de faire des calculs -->
        <?php 
            echo "<p>";
            echo 10+7; 
            echo "</p>";
        
            $nombre1 = 10;

            echo "<p>";
            echo $nombre1;
            echo "</p>";

            $nombre2 = 5;

            $addition = $nombre1 + $nombre2;

        //    Quand on utilise les guillements, les variables sont interprétées 
            echo "<p>L'addition du nombre1 et du nombre2 est $addition</p>";

            // Quand on utilise des quotes, les variables ne sont pas interprétées
            echo '<p>L\'addition du nombre1 et du nombre2 est $addition</p>';


            // Types de valeurs

            // Type int pour les nombres entiers
            $nombre = 8;
            echo gettype($nombre) . "<br>";

            // Type double pour les nombres decimaux
            $nombre = 10.5;
            echo gettype($nombre)  . "<br>";

            // Type double pour les nombres irrationnels

            $nombre = 10/3; // 3.33333333333333
            echo gettype($nombre)  . "<br>";

            // Type float compatible pour les nombres rationnels et irrationnels

            // Type string pour les chaines de caracteres
            $variable = "Ceci est une chaine de caractere";
            echo gettype($variable)  . "<br>";

            // Type string pour un caractere
            $variable="a";
            echo gettype($variable)  . "<br>";

            // Type boolean pour True et False
            // Attention, si une variable est true, alors un echo renverra 1
            // Si la variable est fausse, il renvoie une chaine de caractere vide
            $variable= true;
            echo $variable . "<br>";
            echo gettype($variable)  . "<br>";



            // Référence par assignation
            $fruit1 = "fraise";
            $fruit2 = $fruit1;

            $fruit1 = "Abricot";
            
            echo "<p>Le fruit1 est $fruit1</p>";
            echo "<p>Le fruit2 est $fruit2</p>";


            // Les constantes

            define("CAPITAL", "Paris");

            echo CAPITAL . "<br>";

            // Une constante ne peut pas être défini une deuxieme fois. Si ça arrive, une erreur est levé
            define("CAPITAL", "Marseille");


            // Concatenation

            echo "coucou" . ", " . "ça va ?" . "<br>";

            echo 2 . 5 . true . "<br><br>";

            // Opérateurs de comparaisons


            $resultat = 3 == 3; // Operateur == compare deux valeurs.
            $resultat = "coucou" == "coucou"; // Il fonctionne aussi avec une chaine de caractere
            $resultat = 1 == "1"; // L'opérateur == ne compare pas le type de donnée
            $resultat = 1 === "1"; // L'opérateur === compara les valeurs ET les types de valeurs

            $resultat = 5 > 2; // Operateur > strictement superieur a
            $resultat = 5 < 2; // Operateur < strictement inferieur a
            $resultat = 5 >= 5; // Operateur >=  superieur ou egale a
            $resultat = 5 <= 5; // Operateur <= inferieur ou egale a

            $resultat = 5 != 8; // Renvoie true si les deux nombres sont differents

            echo "$resultat<br>";




            


        ?>



    </body>
</html>