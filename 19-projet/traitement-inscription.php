<?php 

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    if (!empty($_POST)){
        debug($_POST);

        // Enregistrer les donnees dans des variables ($prenom, $nom,...)

        // Requete prepare pour inserer dans une base de donnee

        // If la requete marche pas -> Retour a la page inscription.php avec un message d'erreur
            // indice -> Utiliser un header("location:inscription.php?message=erreur-requete")
        // Si la requete marche bien
            // Redirige avec la page de connexion (avec un message pour dire que l'inscription a reussis)
    }