<?php 

$message = "";

if (!empty($_GET)){
    // echo "<pre>";
    // print_r($_GET);
    // echo "</pre>";

    $prenom = $_GET["prenom"];

    // Connexion a la base de donnée
    $pdo = new PDO('mysql:host=localhost;dbname=bibliotheque',"root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // Enregistre la variable dans la bdd 

    $resultat = $pdo->exec("INSERT INTO abonne (prenom) VALUES (\"$prenom\");");

    // Resultat renvoie le nombre de ligne affecté par la requete.
    // Si c'est 0, un message d'erreur sera envoyé, sinon, un message de réussite
    if ($resultat){
        $message = "Bravo, le prenom $prenom a bien été ajouté à la liste des abonnés";
    }else{
        $message = "Quelque chose ne s'est pas déroulé comme prévu !";
    }


    



    

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


        <title>Ajouter un abonné dans la bdd</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <h1>Ajout d'un abonné</h1>
        <form action="" method="get">
            <div class="conteneurPrenom">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom">
            </div>
            <input type="submit">
        </form>
        <div class="contenuMessage">
            <?= $message; ?>
        </div>
    </body>
</html>