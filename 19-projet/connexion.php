<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    

    if (isset($_GET["message"]) AND $_GET["message"] == "inscr-success"){
        $msg = "<div class=\"alert alert-success w-50 mx-auto m-5 \" role=\"alert\">
        Vous avez bien été ajouté à la liste des utilisateurs !
      </div>";
    }
    include("inc/head.inc.php");
    include("inc/header.inc.php");

    ?>
    
    <main>Je suis la page de connexion</main>

    <?php


    include("inc/footer.inc.php");

    

   