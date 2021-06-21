<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    if (isset($_GET["message"]) AND $_GET["message"] == "req-fail"){
        $msg = "<div class=\"alert alert-danger w-50 mx-auto m-5 \" role=\"alert\">
        La requete a échoué, vous n'avez pas été ajouté à la base de donnée.
      </div>";
    }

    if (isset($_GET["message"]) AND $_GET["message"] == "errorPseudo"){
        $msg = "<div class=\"alert alert-danger w-50 mx-auto m-5 \" role=\"alert\">
        Votre pseudo dois être compris entre 4 et 20 caracteres.
      </div>";
    }

    if (isset($_GET["message"]) AND $_GET["message"] == "pseudoExist"){
        $msg = "<div class=\"alert alert-danger w-50 mx-auto m-5 \" role=\"alert\">
        Ce pseudo est déja utilisé !
      </div>";
    }

    include("inc/head.inc.php");
    include("inc/header.inc.php");

    ?>
    
    <main class="pageInscription">
        <h1 class="text-center my-5">Inscriptions</h1>
        <form action="traitement-inscription.php" method="post" class="mx-auto">
            <div class="conteneurPseudo mb-3">
                <label for="pseudo" class="form-label">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" aria-describedby="pseudo" required>
            </div>
            <div class="conteneurMdp mb-3">
                <label for="mdp" class="form-label">Mot de Passe</label>
                <input type="password" class="form-control" id="mdp" name="mdp" aria-describedby="mdp" required>
            </div>
            <div class="conteneurNom mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nom" required>
            </div>
            <div class="conteneurPrenom mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="prenom" required>
            </div>
            <div class="conteneurEmail mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="pseudo" required>
            </div>
            <div class="conteneurVille mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" aria-describedby="ville" required>
            </div>
            <div class="conteneurCodePostal mb-3">
                <label for="codePostal" class="form-label">Code Postal</label>
                <input type="text" class="form-control" id="codePostal" name="codePostal" aria-describedby="codePostal" required>
            </div>
            <div class="conteneurAdresse mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" aria-describedby="adresse" required>
            </div>
            <div class="conteneurGenre">
                <p>Genre</p>
                <div class="conteneurMasculin form-check">
                    <input class="form-check-input" type="radio" name="genre" id="masculin" value="m">
                    <label class="form-check-label" for="masculin">
                        Masculin
                    </label>
                </div>
                <div class="conteneurFeminin form-check">
                    <input class="form-check-input" type="radio" name="genre" id="feminin" value="f">
                    <label class="form-check-label" for="feminin">
                        Feminin
                    </label>
                </div>
                <div class="conteneurNonBinaire form-check">
                    <input class="form-check-input" type="radio" name="genre" id="nonBinaire" value="nb">
                    <label class="form-check-label" for="nonBinaire">
                        Non Binaire
                    </label>
                </div>
                <div class="conteneurNspp form-check">
                    <input class="form-check-input" type="radio" name="genre" id="nspp" value="nspp" checked>
                    <label class="form-check-label" for="nspp">
                        Ne se prononce pas
                    </label>
                </div>
            </div>
            <div class="conteneurPhotoProfil mb-3">
                <label for="formFile" class="form-label">Photo de profil</label>
                <input class="form-control" type="file" id="photoProfil" name="photoProfil">
            </div>
            <input type="submit" class="btn btn-primary">
            
        </form>
    </main>

    <?php


    include("inc/footer.inc.php");

    

   