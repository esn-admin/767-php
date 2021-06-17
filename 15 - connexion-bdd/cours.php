<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Antoine Dessertenne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Connexion BDD en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <?php 

            // Connexion a la base de donnée
            $pdo = new PDO('mysql:host=localhost;dbname=bibliotheque',"root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            // Premiere requete sql 


            $prenom = "Simba";
            $pdo->exec("INSERT INTO abonne (prenom) VALUES (\"$prenom\");");
            $pdo->exec("UPDATE abonne SET prenom=\"Samir\" WHERE id_abonne = 6");

            // Exercice : Faite une requete DELETE
                // 1_ Tester la requete sur phpmyadmin
                // 2_Utiliser la methode exec pour executer la requete en PHP

            $resultat = $pdo->exec("DELETE FROM abonne WHERE prenom = \"simba\";");

            // $resultat contient le nombre de lignes affectées par ma requete

            if ($resultat){
                echo "Felicitation, $resultat lignes ont été effacés";
            }else{
                echo "malheuresement, votre requete DELETE n'a pas fonctionnée";
            }

            // Exercice -> Creer une nouvelle page ajout_abonne.php 
            //         -> Creer un formulaire contenant uniquement le champs "prenom" (Methode get)
            //         -> En haut du document, faite la connexion a la bdd 
            //         -> Si la variable GET n'est pas vide, enregistrer le prenom dans $prenom 
            //         -> Ensuite, realiser la requete pour ajouter l'abonnée avec le prenom connu


            // FAILLE SQL OU DES FAILLES XXS

            // Faille SQL -> C'est quand dans un formulaire, on ecris du SQL pour changer la requette -> "); DROP DATABASE bibliotheque; --\
            // Faille XSS -> C'est quand dans un formulaire, on ecris du Javascript -> <script>alert();</script>


            // Faire une requete avec PREPARE (pour quand les infos viennent de l'exterieur)

            $enregistrement = $pdo->prepare("UPDATE abonne SET prenom=? WHERE id_abonne = ?");
            $resultat = $enregistrement->execute(
                ["Rafiki", 3]
            );

            // Dans un premier temps on prépare la requete en metant un point d'interrogation la ou on pense inserer une variable.

            // Dans $résultat, on recupere true si tout s'est bien passé, false sinon
            // Exercice : Creez une page pour ajouter des nouveaux livres

            




        ?>
    </body>
</html>