<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    // Si post n'est pas vide
    // On aurais pu etre plus precis en testant isset(pseudo) et !empty(pseudo)
    if (!empty($_POST)){
        // debug($_POST);

        // On enregistre les variables
        $pseudo = $_POST["pseudo"];
        $password = $_POST["password"];

        // Executons une requete qui recupere la ligne du pseudo

        $enregistrement = $pdo->prepare("SELECT * FROM membre WHERE pseudo=?");

        $resultat = $enregistrement->execute(
            [$pseudo]
            );

        // Si la requete s'est bien passé
        if ($resultat){
            // Si on a aucune ligne en resultat, cela signifie que le pseudo n'existe pas
            if (!$enregistrement->rowCount()){
                header("location:" . URL . "connexion.php?message=pseudo-inexistant");
                exit();
            // Si on reçois une ligne, cela signifie que le pseudo existe
            }elseif ($enregistrement->rowCount()){

                // Si le pseudo existe, on recupere la ligne dans $maLigne
                $maLigne = $enregistrement->fetch(PDO::FETCH_ASSOC);

                // Et on recupere le mdp Crypté de la bdd
                $mdpBddCryptee = $maLigne["mdp"];

                // On utilise passeword_veryfy pour tester si le mdp utilisateur et le mdp de la bdd correspondent
                $resultatVerificationMdp = password_verify($password, $mdpBddCryptee);

                // Si la verification renvoie true, on stock le pseudo dans session puis on redirige vers le profil
                if ($resultatVerificationMdp){
                    $_SESSION["pseudo"] = $maLigne["pseudo"];
                    header("location:" . URL . "profil.php?message=succes-connexion");
                    exit();

                // Si la verification renvoie false, alors le mdp n'est pas bon.
                }else{
                    header("location:" . URL . "connexion.php?message=faux-mdp");
                    exit();
                }

            }

            




        }









    }