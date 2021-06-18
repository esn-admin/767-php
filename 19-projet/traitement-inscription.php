<?php 

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    if (!empty($_POST)){
        debug($_POST);

        // Verification des champs

        if (isset($_POST["pseudo"]) AND verifPseudo($_POST["pseudo"]){

        }

        // Verification de la presence du pseudo dans la bdd 

        // Enregistrer les donnees dans des variables ($prenom, $nom,...)

        $pseudo = $_POST["pseudo"];
        $mdp = $_POST["mdp"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $ville = $_POST["ville"];
        $codePostal = $_POST["codePostal"];
        $adresse = $_POST["adresse"];
        $genre = $_POST["genre"];
        $photoProfil = $_POST["photoProfil"];

        // Requete prepare pour inserer dans une base de donnee

        $enregistrement = $pdo->prepare('INSERT INTO membre (pseudo, nom, prenom, email, mdp, photo, ville, code_postal, adresse, genre) VALUES (?,?,?,?,?,?,?,?,?,?)');
        
        $resultat = $enregistrement->execute(
            array($pseudo, $nom, $prenom, $email, $mdp, $photoProfil, $ville, $codePostal,$adresse, $genre)
        );

        if ($resultat){
            header("location:" . URL . "connexion.php?message=inscr-success");
            exit();
        }else{
            header("location:" . URL . "inscription.php?message=req-fail");
            exit();
        }



        // If la requete marche pas -> Retour a la page inscription.php avec un message d'erreur
            // indice -> Utiliser un header("location:inscription.php?message=erreur-requete")
        // Si la requete marche bien
            // Redirige avec la page de connexion (avec un message pour dire que l'inscription a reussis)
    }