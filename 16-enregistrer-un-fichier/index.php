<?php 



if (isset($_FILES["photo"])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $cheminTelechargement = "telechargement/photo-" . time() . $_FILES["photo"]["name"];

    $resultat = move_uploaded_file($_FILES["photo"]["tmp_name"], $cheminTelechargement);

    if ($resultat){
        $msg = "Votre photo a correctement été enregistrée";
    }else{
        $msg = "Votre photo n'a pas correctement été enregistrée";
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


        <title>Enregistrer un fichier</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
    <!-- On ajoute l'attribut enctype, sinon, il ne sera pas possible de télécharger un fichier  -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="conteneurPhoto">
                <label for="photo">Telecharger votre photo</label>
                <input type="file" name="photo" id="photo">
            </div>
            <input type="submit">
        </form>
    </body>
</html>