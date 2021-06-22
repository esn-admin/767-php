<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    // Seul les utilisateurs connectés ont acces a cette page
    if (!userIsConnect()){
        header("location:" . URL . "connexion.php");
        exit();
    }



    if (isset($_GET["message"]) AND $_GET["message"] == "succes-connexion"){
        $msg = "<div class=\"alert alert-success w-50 mx-auto m-5 \" role=\"alert\">
        Vous êtes bien connecté !
      </div>";
    }

    include("inc/head.inc.php");
    include("inc/header.inc.php");

    ?>
    
    <main>Je suis la page de mon profil</main>

    <?php


    include("inc/footer.inc.php");

    

   