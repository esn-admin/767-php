<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    // Page accessible uniquement aux utilisateurs non connectés
    if (userIsConnect()){
        header("location:" . URL . "profil.php");
        exit();
    }

    if (isset($_GET["message"]) AND $_GET["message"] == "inscr-success"){
        $msg = "<div class=\"alert alert-success w-50 mx-auto m-5 \" role=\"alert\">
        Vous avez bien été ajouté à la liste des utilisateurs !
      </div>";
    }

    if (isset($_GET["message"]) AND $_GET["message"] == "pseudo-inexistant"){
        $msg = "<div class=\"alert alert-danger w-50 mx-auto m-5 \" role=\"alert\">
        Ce pseudo est inexistant
      </div>";
    }

    

    if (isset($_GET["message"]) AND $_GET["message"] == "faux-mdp"){
        $msg = "<div class=\"alert alert-danger w-50 mx-auto m-5 \" role=\"alert\">
        Le mot de passe ne correspond pas !
      </div>";
    }

    



    include("inc/head.inc.php");
    include("inc/header.inc.php");

    ?>
    
    <h1 class="text-center m-5">Page de connexion</h1>
        <form action="traitement-connexion.php" method="post" class="w-50 mx-auto">
            <div class="conteneur-pseudo form-floating mb-3">
                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo">
                <label for="pseudo">Pseudo</label>
            </div>
            <div class="conteneur-password form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de Passe">
                <label for="password">Mot de Passe</label>
            </div>
            <button class="btn btn-primary mt-5 d-block mx-auto" type="submit">Submit form</button>
        </form>

    <?php


    include("inc/footer.inc.php");

    

   