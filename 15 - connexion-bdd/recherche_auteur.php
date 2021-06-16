<?php 



if (!empty($_GET)){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $auteur_recherche = $_GET["auteur"];

    // Connexion a la base de donnée
    $pdo = new PDO('mysql:host=localhost;dbname=bibliotheque',"root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // Préparation de la requete avec la methode prepare.
    // On recupere dans $enregistrement tout le resultat de la requete
    // Ce resultat ne sera pas exploitable sans un fetch

    $enregistrement = $pdo->prepare("SELECT * FROM livre WHERE auteur = ?");

    // On execute la requete préparé en insérant le parametre $auteur_recherche
    $resultat = $enregistrement->execute(
        [$auteur_recherche]
    );
    // Dans resultat est stocké un boolean.
    // Il renvoie vrai si la requete a bien fonctionné
    // Il renvoie false s'il y a eu une erreur sql

    

    

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


        <title>Recherche de l'auteur</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <h1>Recherche des livre d'un auteur</h1>
        <form action="" method="get">
            <div class="conteneurAuteur">
                <label for="auteur">Auteur : </label>
                <input type="text" name="auteur" id="auteur" required placeholder="J.K.Rowling">
            </div>
            <input type="submit">
        </form>


        <?php
        if (isset($resultat)){
            if ($resultat AND $enregistrement->rowCount() != 0){
                
                ?>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Id_livre</th>
                            <th>Titre</th>
                            <th>Auteur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($ligne = $enregistrement->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                    <tr>
                                        <td><?= $ligne["id_livre"]?></td>
                                        <td><?= $ligne["titre"]?></td>
                                        <td><?= $ligne["auteur"]?></td>
                                    </tr>
                                <?php


                            }


                        ?>


                        <!-- 
                        <tr>
                            <td>1</td>
                            <td>Harry Potter</td>
                            <td>J.K.Rowling</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Harry Potter 2</td>
                            <td>J.K.Rowling</td>
                        </tr> -->
                    </tbody>
                </table>

                <?php




            }else{
                echo "<p>la requete n'a pas aboutit</p>";
            }
        }
            
        ?>
    </body>
</html>