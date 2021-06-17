<?php 

// Verification du pseudo

if (!isset($_POST["pseudo"]) OR $_POST["pseudo"] != "Jojo"){
    header("location:connexion.php");
    exit(); 
}

// Verification du mot de passe

if (!isset($_POST["password"]) OR $_POST["password"] != "securite"){
    header("location:connexion.php");
    exit();
}

// Creer un cookie 
    // Nom : is_connect
    // Valeur : true

// setcookie("is_connect", true, time() + 60*60*24); On utilise pas de cookie car ce n'est pas securisé pour les parametress sensibles, que l'information que l'utilisateur est connecté

session_start(); // Permet de demarrer une nouvelle session

$_SESSION["is_connect"] = true;

// Optionnel (dans la page profil, mettre un bouton qui redirige vers info-perso.php)

// Creer une troisieme page
    // info-perso.php 
    // Cette page dois être accesible uniquement si le cookie is connect existe et est egal a true



if (!empty($_POST)){
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";



    $pseudo = $_POST["pseudo"];
    $password = $_POST["password"];

    




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


        <title>Base d'une page</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <h1 class="text-center my-5">Page de Profil</h1>
        <p class="text-center">Bienvenue sur la page de profil de <?= $pseudo ?></p>

        <a href="info-perso.php" class="btn btn-large btn-primary">Voir mes infos persos</a>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>