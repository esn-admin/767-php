<?php 


// Connexion a la base de donnée
$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque',"root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// Requete avec query

$toutLesAbonnes = $pdo->query("SELECT * FROM abonne");



?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Affichage des abonnes</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>

        <h1>Tableau de tout les abonnées</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Id Abonne</th>
                    <th>Prenom</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                    while($listeUnAbonne = $toutLesAbonnes->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <tr>
                            <td><?= $listeUnAbonne["id_abonne"]; ?></td>
                            <td><?= $listeUnAbonne["prenom"]; ?></td>
                        </tr>

                        <?php
                        
                    }

                ?>

                <!-- Dans un premier temps, on écris le html a la main avec des faux exemple, pour visualiser ce qui apparaitra dans la boucle -->
                <!-- 
                <tr>
                    <td>1</td>
                    <td>Benoit</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alice</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Marc</td>
                </tr> -->
            </tbody>
        </table>


    </body>
</html>

