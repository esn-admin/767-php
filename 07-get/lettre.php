<?php

$contenuLettre = "";

if (!empty($_GET)){

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $natureLettre = $_GET["natureLettre"];
    $prenom = ucfirst($_GET["prenom"]);

    if ($natureLettre == "amour"){
        $contenuLettre = "<p class=\"alert alert-success w-50 mx-auto\">Je n'ai jamais osé te révéler les sentiments que j'ai pour toi, mais je le fais aujourd'hui à travers ce logiciel très bien codé. <br>Je t'aime $prenom</p>";
    }elseif ($natureLettre == "menace"){
        $contenuLettre = "<p class=\"alert alert-danger w-50 mx-auto\">$prenom, tu ne t'en tireras pas comme ça. J'irais te chercher même en enfer s'il le faut, ta propre mère ne te reconnaitres pas</p>";
    }else{
        echo "<p class=\"alert alert-danger w-50 mx-auto\">Attention, il y a eu une erreur dans la nature de la lettre</p>";
        exit();
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


        <title>Lettre d'amour ou de menace</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <h2 class="text-center my-5">Souhaitez vous envoyer une lettre d'amour ou une lettre de menace?</h2>
        <form action="" method="get">
            <div class="conteneurNatureLettre d-flex justify-content-center my-3">
                
                <input type="radio" id="amour" name="natureLettre" value="amour">
                <label for="amour">Lettre d'amour</label>

                <input type="radio" id="menace" name="natureLettre" value="menace">
                <label for="menace">Lettre de menace</label>
            </div>
            <div class="conteneurPrenom d-flex justify-content-center my-3">
                <label for="prenom">Prenom de la personne aimé ou a menacer : </label>
                <input type="text" name="prenom" id="prenom">
                
            </div>
            <input type="submit" value="Generer la lettre" class="d-block mx-auto my-5">
        </form>

        <div class="lettre">
            <?= $contenuLettre ?>
        </div>
        



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>