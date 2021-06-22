<?php


    include("../inc/init.inc.php");
    include("../inc/functions.inc.php");

    if (!adminIsConnect()){
        header("location:" . URL);
        exit();
    }

        // S'il y a bien un id dans le GET, alors on veut supprimer cet id
    if ($_GET["id"]){

        $id = $_GET["id"];

        // On prepare puis on execute le requete qui supprime le membre
        $enregistrement = $pdo->prepare("DELETE FROM membre WHERE id_membre = ?");
        
        
        $resultat = $enregistrement->execute(
                [$id]
            );

        if ($resultat){
            header("location:" . URL . "admin/membres.php?message=success-delete");
            exit();
        }

    }



    


    
