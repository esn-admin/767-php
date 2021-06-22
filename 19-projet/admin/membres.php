<?php


    include("../inc/init.inc.php");
    include("../inc/functions.inc.php");

    if (!adminIsConnect()){
        header("location:" . URL);
        exit();
    }

    if (isset($_GET["message"]) AND $_GET["message"] == "success-delete"){
        $msg = "<div class=\"alert alert-success w-50 mx-auto m-5 \" role=\"alert\">
        Vous avez bien supprimé un utilisateur !
      </div>";
    }

        // Requete pour recuperer tout les membres
    $affichage = $pdo->query("SELECT * FROM membre");

    


    include("../inc/head.inc.php");
    include("../inc/header.inc.php");

    ?>

    <main>
        <h1>Affichage des membres</h1>
        
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Code Postal</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Je parcours les lignes
                while($listeAffichage = $affichage->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <tr>
                        <th scope="row"><?= $listeAffichage["id_membre"]; ?></th>
                        <td><?= $listeAffichage["pseudo"]; ?></td>
                        <td><?= ucfirst($listeAffichage["nom"]); ?></td>
                        <td><?= ucfirst($listeAffichage["prenom"]); ?></td>
                        <td><?= $listeAffichage["email"]; ?></td>
                        <td><?= $listeAffichage["adresse"]; ?></td>
                        <td><?= $listeAffichage["ville"]; ?></td>
                        <td><?= $listeAffichage["code_postal"]; ?></td>
                        <td><?= $listeAffichage["genre"]; ?></td>
                        <td><?= $listeAffichage["role"] == 1 ? "Admin" : "Client"; ?></td>
                        <td><a href="<?= URL; ?>admin/traitement-suppression.php?id=<?= $listeAffichage["id_membre"]; ?>" class="btn btn-danger">Supprimer</a></td>
                    </tr>

                    <?php
                }

                ?>
            </tbody>
        </table>
    </main>

    <?php


    include("../inc/footer.inc.php");
