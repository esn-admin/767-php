<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Les fonctions</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        
    <?php
        $prixHt = 1235;
        $prixTtc = $prixHt*1.20;

        

        echo "Le prix TTC de $prixHt € est $prixTtc €<br>";

        
        $compteur = 0;
        function calculTVA($prixHt){
            global $compteur; // Je demande a aller chercher la variable $compteur depuis l'espace globale, et de l'amener dans l'espace local

            $prixTtc = $prixHt*(20/100);
            $compteur++;
            return "Le prix TTC de $prixHt € est $prixTtc €<br>";
        }

        echo calculTVA(10);
        echo calculTVA(100);
        echo calculTVA(24);
        echo calculTVA(1235);

        echo $compteur . "<br>";

        // Exercice : Construisez une fonction calculAmelioreTVA, qui calcule la TVA d'un prix, en fonction d'un taxt de TVA choisi
        // Exemple : Calculer la TVA de 500 € a un taux de 30%
        

        function calculAmelioreTVA(float $prixHt, float $tauxTVA=20){
            $prixTtc =  $prixHt * (1 + $tauxTVA/100);
            return "Le prix TTC de $prixHt €, au taux de $tauxTVA % est $prixTtc €<br>";

            
        }

        

        echo calculAmelioreTVA(500,30);
        echo calculAmelioreTVA(2000,5.5);
        echo calculAmelioreTVA(505.5);

        function connexionBdd($host, $dbName, $dbUser, $dbMdp){
            $pdo = new PDO("mysql:host=$host;dbname=$dbName",$dbUser,$dbMdp);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
            return $pdo
        }
    
        $pdo = connexionBdd("localhost", "bibliotheque", "root", "");
    
        function addition($entierA, $entierB, $entierC){
            $resultat = $entierA + $entierB + $entierC;
        }
    
        $resultatDeMonAddition = addition(2,3,4);
        $result = addition(5,10,15);
    
        $longueur = strlen("prenom");
        $chaineAvecUneMajuscule = ucfirst("prenom");
    
        $chaineDeRersultat = substr("chaine",2,2); // permet de couper une chaine de caractere



    ?>

    </body>
</html>