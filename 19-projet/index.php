<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    if (isset($_GET["action"]) AND $_GET["action"] == "deconnexion"){
        session_destroy();
        $msg = "<div class=\"alert alert-info w-50 mx-auto m-5 \" role=\"alert\">
        Vous avez bien été déconnecté
      </div>";
    }

    include("inc/head.inc.php");
    include("inc/header.inc.php");


    
       
    ?>
    
    <main>Je suis la page d'accueil</main>

    <?php


    include("inc/footer.inc.php");

    

   